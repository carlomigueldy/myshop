<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 3,
            'first_name' => 'Carlo Miguel',
            'last_name' => 'Dy',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'role_id' => 2,
            'first_name' => 'Bruce',
            'last_name' => 'Wayne',
            'email' => 'brucewayne@myshop.com',
            'password' => bcrypt('password'),
        ]);

        User::create([
            'role_id' => 2,
            'first_name' => 'Tony',
            'last_name' => 'Stark',
            'email' => 'tonystark@myshop.com',
            'password' => bcrypt('password'),
        ]);
    }
}
