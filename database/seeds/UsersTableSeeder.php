<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = DB::table('users');

        $users->insert([
            'name' => 'Administrator',
            'email' => 'admin@amathesisarchive.com',
            'password' => bcrypt('secret'),
        ]);

        $users->insert([
            'name' => 'Pam',
            'email' => 'pam@amathesisarchive.com',
            'password' => bcrypt('secret'),
        ]);
        
        $users->insert([
            'name' => 'Rufino',
            'email' => 'rufino@amathesisarchive.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
