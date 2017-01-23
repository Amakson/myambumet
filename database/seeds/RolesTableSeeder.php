<?php

use Illuminate\Database\Seeder;

use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'Administrator';
        $role_admin->save();

        $role_provider = new Role();
        $role_provider->name = 'Provider';
        $role_provider->save();

        $role_medic = new Role();
        $role_medic->name = 'Medic';
        $role_medic->save();
    }
}
