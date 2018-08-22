<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Illumi Zoldycks';
        $user->email = 'illumi@test.com';
        $user->profile = 'index.png';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_user);
    
        $admin = new User();
        $admin->name = 'Administrator';
        $admin->email = 'castro.trimex@gmail.com';
        $admin->profile = 'index.png';
        $admin->password = bcrypt('password');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}
