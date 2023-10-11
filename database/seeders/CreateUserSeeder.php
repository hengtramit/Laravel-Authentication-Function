<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'hengtramit',
                'email' => 'hengtramit@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 0,
            ],
            ['name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123456'),
                'role' => 1,
            ],
        ];
        foreach($users as $user) {
            User::create($user);
        }
    }
}
