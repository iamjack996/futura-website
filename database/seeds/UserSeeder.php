<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder{

    public function run(){
        DB::table('users')->delete();

        $adminRole = Role::whereName('administrator')->first();
        $userRole = Role::whereName('user')->first();

        $user = User::create(array(
            'first_name'    => 'FUTURA',
            'last_name'     => 'TEAM',
            'email'         => 'futura.noreply@gmail.com',
            'password'      => Hash::make('admin2016futura'),
            'token'         => str_random(64),
            'activated'     => true
        ));
        $user->assignRole($adminRole);

        $user = User::create(array(
            'first_name'    => 'FUTURA',
            'last_name'     => 'EDITOR',
            'email'         => 'futura.editor@gmail.com',
            'password'      => Hash::make('editor2016futura'),
            'token'         => str_random(64),
            'activated'     => true
        ));
        $user->assignRole($userRole);
    }
}