<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'employee')->first();
    $role_manager  = Role::where('name', 'manager')->first();

    $employee = new User();
    $employee->name = 'Employee Name';
    $employee->email = 'rudi@gmail.com';
    $employee->password = bcrypt(123456);
    $employee->save();
    $employee->roles()->attach($role_employee);

    $manager = new User();
    $manager->name = 'Manager Name';
    $manager->email = 'rudi.amirudin@gmail.com';
    $manager->password = bcrypt(123456);
    $manager->save();
    $manager->roles()->attach($role_manager);
    }
}
