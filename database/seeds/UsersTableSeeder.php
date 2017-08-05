<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        $users->insert([
            'name' => 'Student',
            'email' => 'student@amathesisarchive.com',
            'password' => bcrypt('secret'),
            'student_id' => '2017-0000001',
            'is_student' => 1,
        ]);

        $users->insert([
            'name' => 'Cheryl',
            'email' => 'cheryl@amathesisarchive.com',
            'password' => bcrypt('secret'),
            'student_id' => '2017-0000003',
            'is_student' => 1,
        ]);

        $users->insert([
            'name' => 'Khloe',
            'email' => 'khloe@amathesisarchive.com',
            'password' => bcrypt('secret'),
            'student_id' => '2017-0000002',
            'is_student' => 1,
        ]);
    }
}
