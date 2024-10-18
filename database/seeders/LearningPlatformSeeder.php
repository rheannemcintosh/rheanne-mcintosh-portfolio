<?php

namespace Database\Seeders;

use App\Models\LearningPlatform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LearningPlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = [
            [
                'name' => 'Coursera',
                'url'  => 'https://www.coursera.org/'
            ],
            [
                'name' => 'Laracasts',
                'url'  => 'https://laracasts.com/'
            ],
            [
                'name' => 'Atlassian University',
                'url'  => 'https://university.atlassian.com/'
            ],
            [
                'name' => 'Codecademy',
                'url'  => 'https://www.codecademy.com/'
            ],
            [
                'name' => 'Treehouse',
                'url'  => 'https://teamtreehouse.com/'
            ],
            [
                'name' => 'edX',
                'url'  => 'https://www.edx.org/'
            ],
            [
                'name' => 'FutureLearn',
                'url'  => 'https://www.futurelearn.com/'
            ],
            [
                'name' => 'Khan Academy',
                'url'  => 'https://www.khanacademy.org/'
            ],
            [
                'name' => 'LinkedIn Learning',
                'url'  => 'https://www.linkedin.com/learning/'
            ],
            [
                'name' => 'Udacity',
                'url'  => 'https://www.udacity.com/'
            ],
            [
                'name' => 'Udemy',
                'url'  => 'https://www.udemy.com/'
            ],
        ];

        foreach ($platforms as $platform) {
            LearningPlatform::create($platform);
        }
    }
}
