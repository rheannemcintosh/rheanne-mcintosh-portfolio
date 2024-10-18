<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Page::class::create([
            'title' => 'CV',
            'slug' => 'cv',
            'active' => true,
            'sort_order' => 1,
        ]);

        Page::class::create([
            'title' => 'Projects',
            'slug' => 'projects',
            'active' => false,
            'sort_order' => 2,
        ]);

        Page::class::create([
            'title' => 'Skills',
            'slug' => 'skills',
            'active' => false,
            'sort_order' => 3,
        ]);

        Page::class::create([
            'title' => 'Contact',
            'slug' => 'contact',
            'active' => false,
            'sort_order' => 4,
        ]);

        Page::class::create([
            'title' => 'Timeline',
            'slug' => 'timeline',
            'active' => false,
            'sort_order' => 5,
        ]);

        Page::class::create([
            'title' => 'Blog',
            'slug' => 'blog',
            'active' => false,
            'sort_order' => 6,
        ]);
    }
}
