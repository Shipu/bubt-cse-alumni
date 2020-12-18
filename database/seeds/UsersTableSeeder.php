<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    const DEFAULT_PASSWORD = 'bubt1234';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // ADVISORY
            [
                'name' => 'Dr. Md. Fayyaz Khan',
                'email' => 'fayaaz@mail.com',
                "designation" => "Vice Chancellor",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                'type' => \App\Enums\UserType::ADVISORY,
                'password' => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                'name' => 'Md Saifur Rahman',
                'email' => 'saifurs@gmail.com',
                "designation" => "Vice Chancellor",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                'type' => \App\Enums\UserType::ADVISORY,
                'password' => bcrypt(self::DEFAULT_PASSWORD),
            ],

            // Executive Member
            [
                "name" => "Abu Hena Md Sahin",
//                "mobile" => "01717017565",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "shahin1997@gmail.com",
                "designation" => "President",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Nazmul Islam Bhuiyan",
//                "mobile" => "01711452647",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "nibcse@gmail.com",
                "designation" => "Vice President",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Alim Al Razi",
//                "mobile" => "01787667167",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "alrazi17@gmail.com",
                "designation" => "Vice President",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Mehedi Hasan Nahid",
//                "mobile" => "01700743854",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "nahid.dns@gmail.com",
                "designation" => "General Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
 /*           [
                "name" => "Ali Sazzad Sohag",
//                "mobile" => "01671591543",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "Joint Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],*/
            [
                "name" => "Moudud Hasan",
//                "mobile" => "01786273127",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "moududhasanbubt@gmail.com",
                "designation" => "Joint Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Md. Hafizul Alam",
//                "mobile" => "01673338948",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "hafizulalam11@gmail.com",
                "designation" => "Treasurer",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Mahamudul Karim Mazumder",
//                "mobile" => "01670167395",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "makreza6@gmail.com",
                "designation" => "Organization Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Md. Faiz Ahamed Shipu",
//                "mobile" => "01616022669",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "shipuahamed01@gmail.com",
                "designation" => "Joint Organization Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Ahasanul Alam Rifat",
//                "mobile" => "01740592693",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "ahasanulalamrifat@gmail.com",
                "designation" => "Joint Organization Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Md Ashraful Islam",
//                "mobile" => "01723777711",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "ashraful@bubt.edu.bd",
                "designation" => "Research Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Taposhi Rabea",
//                "mobile" => "01681398858",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "taposhi@gmail.com",
                "designation" => "It, Publication and Media Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Foysal Zafree",
//                "mobile" => "01771443388",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "foysalzafree@gmail.com",
                "designation" => "Cultural Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Mohammad Mehedi Hasan",
//                "mobile" => "01754242590",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "hasanbdmehadi@gmail.com",
                "designation" => "Office Secretary",
                "type" => \App\Enums\UserType::EXECUTIVE,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],

            // General member
            [
                "name" => "Mehedi Hasan Akash",
//                "mobile" => "01521456159",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "mehaakmehi@gmail.com",
                "designation" => "Office Secretary",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Mufti Muntasir",
//                "mobile" => "01754242590",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "hasanbdmehadi2@gmail.com",
                "designation" => "Office Secretary",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],

            [
                "name" => "Md. Abu Sufian",
//                "mobile" => "01515629767",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "sufiantipu@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::MEMBER,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Tushar Roy",
//                "mobile" => "01610143420",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "tushar.roy.cse@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "M.H. Numan",
//                "mobile" => "01827211193",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "mahmudnuman@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Md Tariqul Islam",
//                "mobile" => "01917272349",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "tariqul4911@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Abu Rayhan Ahmad",
//                "mobile" => "01965691244",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "rayhan.ahmed5000@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Kaniz Fatema Mow",
//                "mobile" => "01627957677",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "samiyamow613@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Golam Mahbub Fahad",
//                "mobile" => "01684326463",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "mahbub.fahad@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
            [
                "name" => "Avishekh Bhowmik",
//                "mobile" => "01521487199",
                "gender" => \App\Enums\GenderEnum::NOT_SHARING,
                "email" => "avishekh.bhowmik71@gmail.com",
                "designation" => "General Members",
                "type" => \App\Enums\UserType::GENERAL,
                "password" => bcrypt(self::DEFAULT_PASSWORD),
            ],
        ]);
    }
}
