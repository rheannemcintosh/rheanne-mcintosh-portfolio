<?php

namespace Database\Seeders;

use App\Models\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Skill::create([
            'skill'             => 'PHP',
            'type'              => 'Primary',
            'skill_category_id' => 1,
            'sort_order'        => 1,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'HTML',
            'type'              => 'Secondary',
            'skill_category_id' => 1,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'CSS',
            'type'              => 'Tertiary',
            'skill_category_id' => 1,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'JavaScript',
            'type'              => 'Secondary',
            'skill_category_id' => 1,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Laravel',
            'type'              => 'Primary',
            'skill_category_id' => 2,
            'sort_order'        => 2,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Vue.js',
            'type'              => 'Tertiary',
            'skill_category_id' => 2,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Tailwind CSS',
            'type'              => 'Secondary',
            'skill_category_id' => 2,
            'sort_order'        => 4,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'MySQL',
            'type'              => 'Primary',
            'skill_category_id' => 3,
            'sort_order'        => 3,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'PostgreSQL',
            'type'              => 'Secondary',
            'skill_category_id' => 3,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Git',
            'type'              => null,
            'skill_category_id' => 4,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Mercurial',
            'type'              => null,
            'skill_category_id' => 4,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Laravel Forge',
            'type'              => 'Secondary',
            'skill_category_id' => 5,
            'sort_order'        => 5,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Jira',
            'type'              => 'Primary',
            'skill_category_id' => 7,
            'sort_order'        => 6,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Trello',
            'type'              => null,
            'skill_category_id' => 7,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);


        Skill::create([
            'skill'             => 'MySQL Workbench',
            'type'              => 'Secondary',
            'skill_category_id' => 8,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'pgAdmin',
            'type'              => 'Tertiary',
            'skill_category_id' => 8,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'PhpStorm',
            'type'              => 'Secondary',
            'skill_category_id' => 8,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'Sourcetree',
            'type'              => 'Secondary',
            'skill_category_id' => 8,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);

        Skill::create([
            'skill'             => 'GitHub',
            'type'              => 'Secondary',
            'skill_category_id' => 8,
            'sort_order'        => null,
            'show_on_homepage'  => true,
        ]);
    }
}
