<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    public function run()
    {
        $tickets = [
            [
                'id'              => 1,
                'title'           => 'School of Electrical PC Issues',
                'content'         => 'Admin Office PC not displaying',
                'author_name'     => 'Secretary',
                'author_email'    => 'secretary@schoolofelect',
                'created_at'      => '2023-08-08 07:50:06',
                'status_id'       => 1,
                'priority_id'     => 3,
                'category_id'     => 5,
                'assigned_to_user_id' => 2,
            ],
            [
                'id'              => 2,
                'title'           => 'School of Electrical PC Issues',
                'content'         => 'Admin Office PC not powering on',
                'author_name'     => 'Secretary',
                'author_email'    => 'secretary@schoolofelect',
                'created_at'      => '2023-08-08 07:51:06',
                'status_id'       => 1,
                'priority_id'     => 3,
                'category_id'     => 2,
                'assigned_to_user_id' => 2,
            ],
            // ... add the remaining tickets
        ];

        Ticket::insert($tickets);
    }
}

