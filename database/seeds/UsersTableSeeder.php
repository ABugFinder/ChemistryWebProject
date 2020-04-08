<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin',
            'surname' => 'User',
            'username' => 'GodSer',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
        ]);

        $admin1 = User::create([
            'name' => 'Andres',
            'surname' => 'Suerez',
            'username' => 'BugMaster',
            'email' => 'bicho_suarez@hotmail.com',
            'password' => Hash::make('password'),
        ]);

        $admin2 = User::create([
            'name' => 'Jan',
            'surname' => 'Palacios',
            'username' => 'Phobosentured',
            'email' => 'jan@palacios.com',
            'password' => Hash::make('password'),
        ]);

        $user = User::create([
            'name' => 'Normal',
            'surname' => 'User',
            'username' => 'NorSer',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
        ]);

        $admin->roles()->attach($adminRole);
        $admin->roles()->attach($userRole);
        $admin1->roles()->attach($adminRole);
        $admin2->roles()->attach($adminRole);
        $user->roles()->attach($userRole);

    }
}
