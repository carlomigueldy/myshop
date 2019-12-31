<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Customer',
        ]);

        Role::create([
            'name' => 'Staff',
        ]);

        Role::create([
            'name' => 'Owner',
        ]);
    }
}
