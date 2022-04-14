<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Kwanda', 'email' => 'kwanda@admin.com', 'password' => '$2a$13$2Ef1KSmGdExWdv9k7ffU2.wJmmLJacYU/13IO/KHKFBckzmEeQZo6', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
