<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Backend\WebsiteSetting;

class WebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteSetting::create([
            'websiteTitle' => 'Rakibul Hasan',
            'siteLogo' => '',
            'facebook' => 'www.facebook.com',
            'twitter' => 'twitter.com',
            'instagram' => 'instagram.com',
            'linkedin' => 'linkedin.com',
            'github' => 'github.com',
            'status' => '1',
        ]);
    }
}
