<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => rand(0, 1),
            'userImage' => 'https://media.licdn.com/dms/image/D5603AQEn6X2tW6ObkA/profile-displayphoto-shrink_100_100/0/1666351592420?e=1680134400&v=beta&t=GfAr96r9Y4J-hIb3h4pGwqaZBv_bTgnp9mZV5QX9X6w',
            'name' => 'Rakibul Hasan',
            'email' => 'admin@gmail.com',
            'password' => '123456789',
            'status' => '1',
        ]);
        DB::table('users')->insert([
            'id' => rand(0, 1),
            'userImage' => 'https://media.licdn.com/dms/image/D5603AQEn6X2tW6ObkA/profile-displayphoto-shrink_100_100/0/1666351592420?e=1680134400&v=beta&t=GfAr96r9Y4J-hIb3h4pGwqaZBv_bTgnp9mZV5QX9X6w',
            'name' => 'Rakib Hasan',
            'email' => 'admin2@gmail.com',
            'password' => '123456789',
            'status' => '1',
        ]);
        $this->call('UsersTableSeeder');
    }
}
