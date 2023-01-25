<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'userImage' => 'https://media.licdn.com/dms/image/D5603AQEn6X2tW6ObkA/profile-displayphoto-shrink_100_100/0/1666351592420?e=1680134400&v=beta&t=GfAr96r9Y4J-hIb3h4pGwqaZBv_bTgnp9mZV5QX9X6w',
            'name' => 'Rakibul Hasan',
            'email' => 'admin@gmail.com',
            'password' => '123456789',
            'status' => '1',
        ]);
    }
}
