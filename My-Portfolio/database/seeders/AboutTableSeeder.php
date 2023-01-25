<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Backend\About;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'aboutImage' => 'https://pbs.twimg.com/semantic_core_img/1615360128294817793/xAM4Ub5P?format=jpg&name=small',
            'aboutTitle' => 'Web Development',
            'aboutDescription' => 'With decades of maintenance of way expertise and experience, no one knows the rail like Loram. Today, with our Loram Technologies business group, we’re leveraging our accumulated data',
            'name' => 'Rakibul Hasan',
            'degree' => 'Diploma',
            'phone' => '0178624264',
            'address' => 'Jamalpur',
            'birth' => '25-12-2000',
            'experience' => '1 Years',
            'freelance' => '1',
            'status' => '1',
        ]);
    }
}
