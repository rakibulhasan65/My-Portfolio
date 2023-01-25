<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Backend\Banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'image' => 'https://pbs.twimg.com/semantic_core_img/1615360128294817793/xAM4Ub5P?format=jpg&name=small',
            'name' => 'Rakibul Hasan',
            'resume' => '',
            'resumeVideo' => 'https://www.youtube.com/watch?v=IA9A1bVUW6I',
            'status' => '1',
            'image' => rand(0, 1),
        ]);
    }
}
