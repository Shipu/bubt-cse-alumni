@extends(backpack_view('layouts.plain'))

@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-7">
            <h3 class="text-center mb-4">{{ trans('backpack::base.register') }}</h3>
            <div class="card">
                <div class="card-body">
                    <form class="col-md-12" role="form" method="POST" action="{{ route('backpack.auth.register') }}">
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="name">{{ trans('backpack::base.name') }}</label>

                                    {{--                            <div>--}}
                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="name" value="{{ old('name') }}">

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                    {{--                            </div>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="{{ backpack_authentication_column() }}">{{ config('backpack.base.authentication_column_name') }}</label>

                                    <div>
                                        <input type="{{ backpack_authentication_column()=='email'?'email':'text'}}" class="form-control{{ $errors->has(backpack_authentication_column()) ? ' is-invalid' : '' }}" name="{{ backpack_authentication_column() }}" id="{{ backpack_authentication_column() }}" value="{{ old(backpack_authentication_column()) }}">

                                        @if ($errors->has(backpack_authentication_column()))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first(backpack_authentication_column()) }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="department_id">{{ trans('validation.attributes.department_id') }}</label>

                                    <div>
                                        <input type="hidden" name="department_id" value="1">
                                        <select name="department_id" id="department_id" class="form-control{{ $errors->has('department_id') ? ' is-invalid' : '' }}" disabled>
                                            <option value="1" selected>CSE</option>
                                        </select>
                                        @if ($errors->has('department_id'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('department_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="shift">{{ trans('validation.attributes.shift') }}</label>

                                    <div>
                                        <select name="shift" id="shift" class="form-control{{ $errors->has('shift') ? ' is-invalid' : '' }}">
                                            <option value="{{ \App\Enums\ShiftEnum::DAY }}">Day</option>
                                            <option value="{{ \App\Enums\ShiftEnum::EVENING }}">Evening</option>
                                        </select>
                                        @if ($errors->has('shift'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('shift') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label" for="intake">{{ trans('validation.attributes.intake') }}</label>

                                    <div>
                                        <input type="text" class="form-control{{ $errors->has('intake') ? ' is-invalid' : '' }}" name="intake" id="intake" value="{{ old('intake') }}">

                                        @if ($errors->has('intake'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('intake') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="university_id">{{ trans('validation.attributes.university_id') }}</label>

                                    <div>
                                        <input type="text" class="form-control{{ $errors->has('university_id') ? ' is-invalid' : '' }}" name="university_id" id="university_id" value="{{ old('university_id') }}">

                                        @if ($errors->has('university_id'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('university_id') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="passing_year">{{ trans('validation.attributes.passing_year') }}</label>

                                    <div>
                                        <input type="text" class="form-control{{ $errors->has('passing_year') ? ' is-invalid' : '' }}" name="passing_year" id="passing_year" value="{{ old('passing_year') }}">

                                        @if ($errors->has('passing_year'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('passing_year') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" for="mobile">{{ trans('validation.attributes.mobile') }}</label>

                                    <div>
                                        <input type="mobile" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" id="mobile">
                                        @if ($errors->has('mobile'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password">{{ trans('backpack::base.password') }}</label>

                                    <div>
                                        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password">

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label" for="password_confirmation">{{ trans('backpack::base.confirm_password') }}</label>

                                    <div>
                                        <input type="password" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}" name="password_confirmation" id="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ trans('backpack::base.register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (backpack_users_have_email())
                <div class="text-center"><a href="{{ route('backpack.auth.password.reset') }}">{{ trans('backpack::base.forgot_your_password') }}</a></div>
            @endif
            <div class="text-center"><a href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a></div>
            <br>
        </div>
    </div>
@endsection
