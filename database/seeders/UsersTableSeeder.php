<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => bcrypt('password'),
                'remember_token' => null,
                'uuid'           => '',
                'referral_code'  => '',
                'phone'          => '',
            ],
        ];

        User::insert($users);


        $user = User::create([
            'name'       => 'Saiful Islam',
            'email'      => 'saiful013101@gmail.com',
            'password'   => Hash::make('123456'),
            'phone'      => '01700000000',
            'country_id' => 18,
        ]);


        $user->roles()->sync([3]);


        Agent::create([
            'user_id'    => $user->id,
            'name'       => 'Saiful Islam',
            'email'      => 'saiful013101@gmail.com',
            'phone'      => '01700000000',
            'country_id' => 18,

        ]);
    }
}
