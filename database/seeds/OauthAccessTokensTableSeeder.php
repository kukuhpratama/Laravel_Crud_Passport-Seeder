<?php

use Illuminate\Database\Seeder;

class OauthAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_access_tokens')->delete();
        
        \DB::table('oauth_access_tokens')->insert(array (
            0 => 
            array (
                'id' => '341b3995e15e623f592d08e05c8ab47e7c7ff1b85aef3ec9adbfed9dab68ec82d20324336fa43b97',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 13:36:01',
                'updated_at' => '2020-04-17 13:36:01',
                'expires_at' => '2021-04-17 13:36:01',
            ),
            1 => 
            array (
                'id' => '63426f2c4f292fe275ba220e58c871692a3a1ff73f2064392353a516635bd4ece932a805757a5998',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 13:36:16',
                'updated_at' => '2020-04-17 13:36:16',
                'expires_at' => '2021-04-17 13:36:16',
            ),
            2 => 
            array (
                'id' => '6ce4b9555e61c9e94c7f71ffc2745da810d5dc3625398b058b2ff20d61dfc6ffd6ffb6e0203d022d',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 13:48:50',
                'updated_at' => '2020-04-17 13:48:50',
                'expires_at' => '2021-04-17 13:48:50',
            ),
            3 => 
            array (
                'id' => '6d77121f96456d4a029316c7c049b34647c2231555f509bad6edf52db55a8e4b861f19b28fcf007f',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 08:16:37',
                'updated_at' => '2020-04-17 08:16:37',
                'expires_at' => '2021-04-17 08:16:37',
            ),
            4 => 
            array (
                'id' => '7fff395eb1c917252684278247511dec946d1f4218cedea3ff5e18bacfaa2812c3a18f65d1e740f6',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 13:16:03',
                'updated_at' => '2020-04-17 13:16:03',
                'expires_at' => '2021-04-17 13:16:03',
            ),
            5 => 
            array (
                'id' => '942bd1bc392ca7ff86f8132d9a95d1328c40dd9f3a1fb27162afe38ffa176a7101aad02343dd1ba6',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 13:25:12',
                'updated_at' => '2020-04-17 13:25:12',
                'expires_at' => '2021-04-17 13:25:12',
            ),
            6 => 
            array (
                'id' => 'e5080d6ae6998aa914c85001d523eb373ebb61d72f159018d3c4618c14b2f159bb5aac1ea5f7d4e0',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 13:37:11',
                'updated_at' => '2020-04-17 13:37:11',
                'expires_at' => '2021-04-17 13:37:11',
            ),
            7 => 
            array (
                'id' => 'fbb42479953f7f259a14c51242350e237c3736297082c1c6a694f55be18c0e31c6fae87804d7e95b',
                'user_id' => 1,
                'client_id' => 1,
                'name' => 'nApp',
                'scopes' => '[]',
                'revoked' => 0,
                'created_at' => '2020-04-17 08:19:31',
                'updated_at' => '2020-04-17 08:19:31',
                'expires_at' => '2021-04-17 08:19:31',
            ),
        ));
        
        
    }
}