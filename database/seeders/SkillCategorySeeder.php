<?php

namespace Database\Seeders;

use App\Models\SkillCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SkillCategory::create([
            'category'   => 'Languages',
            'sort_order' => 1,
        ]);

        SkillCategory::create([
            'category'   => 'Frameworks',
            'sort_order' => 2,
        ]);

        SkillCategory::create([
            'category'   => 'Databases',
            'sort_order' => 3,
        ]);

        SkillCategory::create([
            'category'   => 'Version Control',
            'sort_order' => 4,
        ]);

        SkillCategory::create([
            'category'   => 'Deployment',
            'sort_order' => 5,
        ]);

        SkillCategory::create([
            'category'   => 'Testing & Debugging',
            'sort_order' => 6,
        ]);

        SkillCategory::create([
            'category'   => 'Project Management',
            'sort_order' => 7,
        ]);

        SkillCategory::create([
            'category'   => 'Tools & Technologies',
            'sort_order' => 8,
        ]);

        SkillCategory::create([
            'category'   => 'Libraries',
            'sort_order' => 9,
        ]);

        SkillCategory::create([
            'category'   => 'Packages',
            'sort_order' => 10,
        ]);
    }
}
