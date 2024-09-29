<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'nim'       => '123456789',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'John Doe',
            'username'  => 'johndoe',
            'email'     => 'john@example.com',
            'nim'       => '0987654321',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->create([
            'name'      => 'Maya Doe',
            'username'  => 'mayadoe',
            'email'     => 'maya@example.com',
            'nim'       => '2487924729',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        // User::factory()->count(10)->create();
    }
}
