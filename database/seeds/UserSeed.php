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
            
            ['id' => 1, 'name' => 'Kwanda', 'email' => 'Kwanda@admin.com', 'password' => '$2a$12$43GOT19BzWISO0rqAI78iu1lG2IQaIGiTE0/G5GNV.5UrnBQjr3KC', 'role_id' => 1, 'remember_token' => '',],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
