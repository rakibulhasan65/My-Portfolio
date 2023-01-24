<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    public function definition()
    {
        return [
            'aboutImage	' => 'https://pbs.twimg.com/semantic_core_img/1615360128294817793/xAM4Ub5P?format=jpg&name=small',
            'aboutTitle	' => 'Web Development',
            'aboutDescription' => 'With decades of maintenance of way expertise and experience, no one knows the rail like Loram. Today, with our Loram Technologies business group, we’re leveraging our accumulated data',
            'name' => 'Rakibul Hasan',
            'degree	' => 'Diploma',
            'Phone	' => '0178624264',
            'address	' => 'Jamalpur',
            'birth	' => '25-12-2000',
            'freelance	' => '1',
            'experience	' => '1 Years',
            'status	' => '1',
        ];
    }
}
