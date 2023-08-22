<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@it-workshop.com',
                'password'       => '$2y$10$DuF3kTPWEP6nXSGpe5GlOOCSEFGkjGh0J5GO.vSGEvh...',
                'remember_token' => null,
                'created_at'     => '2023-08-15 06:52:24',
            ],
            [
                'id'             => 2,
                'name'           => 'Technician-1',
                'email'          => 'tech1@it-workshop.com',
                'password'       => '$2y$10$jQhRGx/c75mqgvnm1LljiOIDqCP9khJcBlmg8s7GswQ...',
                'remember_token' => null,
                'created_at'     => '2023-08-15 06:50:28',
            ],
            [
                'id'             => 3,
                'name'           => 'Technician-2',
                'email'          => 'tech2@it-workshop.com',
                'password'       => '$2y$10$XcUrWnXOa1tcaorU2GOq1O8WxzuMfDFhORBKFECE87x...',
                'remember_token' => null,
                'created_at'     => '2023-08-15 06:51:19',
            ],
            [
                'id'             => 4,
                'name'           => 'Technician-3',
                'email'          => 'tech3@it-workshop.com',
                'password'       => '$2y$10$9/aZnlVqd7kIjX7OZQe7Qu/v6W67LRXYOCaR6FtGua....',
                'remember_token' => null,
                'created_at'     => '2023-08-15 06:49:43',
            ],
            // ... add the remaining users
        ];

        User::insert($users);
    }
}

