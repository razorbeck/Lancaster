<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'             => 1,
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'password'       => '$2y$10$xES/DnzJF7knkEFKDuBWYO/W2oMN3sz4hhoxhL1Re/ZkB1WoVjm12',
            'remember_token' => null,
            'created_at'     => '2019-06-11 16:53:10',
            'updated_at'     => '2019-06-11 16:53:10',
            'deleted_at'     => null,
        ]];

        User::insert($users);
    }
}
