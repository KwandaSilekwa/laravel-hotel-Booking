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
            
            ['id' => 1, 'name' => 'Kwanda', 'email' => 'kwanda@admin.com', 'password' => '$2a$10$ywKv7Lpr3dpsH.4U/5jltOy8jfa1cKf/oG2f5W6doak9eA4o5gq/.', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
