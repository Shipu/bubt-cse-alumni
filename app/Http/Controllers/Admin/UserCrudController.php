<?php


namespace App\Http\Controllers\Admin;


use App\Models\Department;
use App\Models\UserProfile;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\UserStoreCrudRequest as StoreRequest;
use App\Http\Requests\UserUpdateCrudRequest as UpdateRequest;
use Illuminate\Support\Facades\Hash;

class UserCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation { store as traitStore; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation { update as traitUpdate; }
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;

    public function setup()
    {
        $this->crud->setModel(config('backpack.permissionmanager.models.user'));
        $this->crud->setEntityNameStrings(trans('backpack::permissionmanager.user'), trans('backpack::permissionmanager.users'));
        $this->crud->setRoute(backpack_url('user'));
    }

    public function setupListOperation()
    {
        $this->crud->setColumns([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
            ],
            [ // n-n relationship (with pivot table)
                'label'     => trans('backpack::permissionmanager.roles'), // Table column heading
                'type'      => 'select_multiple',
                'name'      => 'roles', // the method that defines the relationship in your Model
                'entity'    => 'roles', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => config('permission.models.role'), // foreign key model
            ],
            [ // n-n relationship (with pivot table)
                'label'     => trans('backpack::permissionmanager.extra_permissions'), // Table column heading
                'type'      => 'select_multiple',
                'name'      => 'permissions', // the method that defines the relationship in your Model
                'entity'    => 'permissions', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model'     => config('permission.models.permission'), // foreign key model
            ],
        ]);
    }

    public function setupCreateOperation()
    {
        $this->addUserFields();
        $this->crud->setValidation(StoreRequest::class);
    }

    public function setupUpdateOperation()
    {
        $this->addUserFields();
        $this->crud->setValidation(UpdateRequest::class);
    }

    /**
     * Store a newly created resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $userProfileAttributes = app(UserProfile::class)->getFillable();

//            ->except($userProfileAttributes);
        $userProfileRequest = $this->crud->request->only($userProfileAttributes);
        $this->crud->request = $this->crud->validateRequest();
        $this->crud->request = $this->handlePasswordInput($this->crud->request);
//        dd($this->crud->request->except($userProfileAttributes));
        foreach ($userProfileAttributes as $attribute) {
            $this->crud->request->request->remove($attribute);
        }

        $this->crud->unsetValidation(); // validation has already been run

        $response = $this->traitStore();
        $userId = $this->crud->entry->id;
        $userProfileRequest = array_merge($userProfileRequest, ['user_id' => $userId]);
        UserProfile::create($userProfileRequest);

        return  $response;
    }

    /**
     * Update the specified resource in the database.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        $this->crud->request = $this->crud->validateRequest();
        $this->crud->request = $this->handlePasswordInput($this->crud->request);
        $this->crud->unsetValidation(); // validation has already been run

        return $this->traitUpdate();
    }

    /**
     * Handle password input fields.
     */
    protected function handlePasswordInput($request)
    {
        // Remove fields not present on the user.
        $request->request->remove('password_confirmation');
        $request->request->remove('roles_show');
        $request->request->remove('permissions_show');

        // Encrypt password if specified.
        if ($request->input('password')) {
            $request->request->set('password', Hash::make($request->input('password')));
        } else {
            $request->request->remove('password');
        }

        return $request;
    }

    protected function addUserFields()
    {
        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => trans('backpack::permissionmanager.name'),
                'type'  => 'text',
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                'name'  => 'email',
                'label' => trans('backpack::permissionmanager.email'),
                'type'  => 'email',
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                'name'  => 'password',
                'label' => trans('backpack::permissionmanager.password'),
                'type'  => 'password',
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                'name'  => 'password_confirmation',
                'label' => trans('backpack::permissionmanager.password_confirmation'),
                'type'  => 'password',
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                'name'  => 'type',
                'label' => trans('validation.attributes.type'),
                'type'  => 'select_from_array',
                'options' => trans('user_type'),
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                'name'  => 'designation',
                'label' => trans('validation.attributes.designation'),
                'type'  => 'text',
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                // two interconnected entities
                'label'             => trans('backpack::permissionmanager.user_role_permission'),
                'field_unique_name' => 'user_role_permission',
                'type'              => 'checklist_dependency',
                'name'              => ['roles', 'permissions'],
                'subfields'         => [
                    'primary' => [
                        'label'            => trans('backpack::permissionmanager.roles'),
                        'name'             => 'roles', // the method that defines the relationship in your Model
                        'entity'           => 'roles', // the method that defines the relationship in your Model
                        'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
                        'attribute'        => 'name', // foreign key attribute that is shown to user
                        'model'            => config('permission.models.role'), // foreign key model
                        'pivot'            => true, // on create&update, do you need to add/delete pivot table entries?]
                        'number_columns'   => 3, //can be 1,2,3,4,6
                    ],
                    'secondary' => [
                        'label'          => ucfirst(trans('backpack::permissionmanager.permission_singular')),
                        'name'           => 'permissions', // the method that defines the relationship in your Model
                        'entity'         => 'permissions', // the method that defines the relationship in your Model
                        'entity_primary' => 'roles', // the method that defines the relationship in your Model
                        'attribute'      => 'name', // foreign key attribute that is shown to user
                        'model'          => config('permission.models.permission'), // foreign key model
                        'pivot'          => true, // on create&update, do you need to add/delete pivot table entries?]
                        'number_columns' => 3, //can be 1,2,3,4,6
                    ],
                ],
                'tab' => trans('validation.attributes.general_tab')
            ],
            [
                'name'  => 'gender',
                'label' => trans('validation.attributes.gender'),
                'type'  => 'select_from_array',
                'options' => trans('gender'),
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'user_id',
                'label' => trans('validation.attributes.blood_group'),
                'type' => 'hidden',
                'entity' => 'user_profile',
                'attribute' => 'user_id',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'department_id',
                'key' => 'user_profile.department_id',
                'label' => trans('validation.attributes.department_id'),
                'type'  => 'select_from_array',
                'options'   => Department::pluck('name', 'id'),
                'entity' => 'user_profile',
                'attribute' => 'department_id',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'shift',
                'key' => 'user_profile.shift',
                'label' => trans('validation.attributes.shift'),
                'type'  => 'select_from_array',
                'options' => trans('shift'),
                'entity' => 'user_profile',
                'attribute' => 'shift',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'intake',
                'key' => 'user_profile.intake',
                'label' => trans('validation.attributes.intake'),
                'type'  => 'number',
                'entity' => 'user_profile',
                'attribute' => 'intake',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'university_id',
                'key' => 'user_profile.university_id',
                'label' => trans('validation.attributes.university_id'),
                'type'  => 'text',
                'entity' => 'user_profile',
                'attribute' => 'university_id',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'mobile',
                'key' => 'user_profile.mobile',
                'label' => trans('validation.attributes.mobile'),
                'type'  => 'text',
                'entity' => 'user_profile',
                'attribute' => 'mobile',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
            [
                'name'  => 'blood_group',
                'key' => 'user_profile.blood_group',
                'label' => trans('validation.attributes.blood_group'),
                'type'  => 'select_from_array',
                'options' => trans('blood_group'),
                'allows_null' => true,
                'entity' => 'user_profile',
                'attribute' => 'blood_group',
                'tab' => trans('validation.attributes.personal_info_tab')
            ],
        ]);
    }
}
