<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        User::insert([[
            'user'             => '1115070027',
            'password'         => '$2y$10$bfsEh1.pFi50qyj1KWNjYu1lU87tsIUz/uG2JgIVlNc.0ywsxYq/y',
            'status'           => 'A',
            'remember_token'   => '5XlaU0zKSVUZs5GUViPazeOdFcwx8qK3yJu0SSa1vL9rP5XphUimzmYICTGD',
            'created_at'       => now(),
            'updated_at'       => now()
        ],
        [
            'user'             => '111222333',
            'password'         => '$2y$10$8xNs/oT1aYqPXwrmWbUlRu03jih6FKrOsO0krvgItvOOVXpPz.RCK',
            'status'           => 'A',
            'remember_token'   => 'ibqYWZXQ2f1imZkri2WLSEFgzewalE9eYgv8rRVJ0EPOV5GHLrcXBmGnFJlE',
            'created_at'       => now(),
            'updated_at'       => now()
        ]]);
    }
}
