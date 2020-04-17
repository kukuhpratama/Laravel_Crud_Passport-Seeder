<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => NULL,
                'name' => 'Laravel Personal Access Client',
                'secret' => 'B0whKQVfkRh1lkkjapCe9qJNb0Q9BBt6cj9nOR5n',
                'redirect' => 'http://localhost',
                'personal_access_client' => 1,
                'password_client' => 0,
                'revoked' => 0,
                'created_at' => '2020-04-17 08:14:41',
                'updated_at' => '2020-04-17 08:14:41',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => NULL,
                'name' => 'Laravel Password Grant Client',
                'secret' => 'ExJiyATNqHSNMwUBztdJQl0hxCOLqoGdt1hvyVfX',
                'redirect' => 'http://localhost',
                'personal_access_client' => 0,
                'password_client' => 1,
                'revoked' => 0,
                'created_at' => '2020-04-17 08:14:41',
                'updated_at' => '2020-04-17 08:14:41',
            ),
        ));
        
        
    }
}