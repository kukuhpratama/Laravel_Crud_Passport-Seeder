<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'rafi',
                'email' => 'balikpapan@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$woOntWRmI1yj0LZJZZMkq..Sa51OK4exYJHMkhhO0xAiBBbr9v9fa',
                'remember_token' => NULL,
                'created_at' => '2020-04-17 08:16:37',
                'updated_at' => '2020-04-17 08:16:37',
            ),
        ));
        
        
    }
}