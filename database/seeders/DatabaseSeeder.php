<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\custom\AboutSeeder;
use Database\Seeders\custom\DegreeSeeder;
use Database\Seeders\custom\EducationSeeder;
use Database\Seeders\custom\EmployerSeeder;
use Database\Seeders\custom\ResponsibilitySeeder;
use Database\Seeders\custom\RoleSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * @var string[] $customSeeders
     */
    private array $customSeeders = [
        'database/seeders/custom/AboutSeeder.php'          => AboutSeeder::class,
        'database/seeders/custom/DegreeSeeder.php'         => DegreeSeeder::class,
        'database/seeders/custom/EducationSeeder.php'      => EducationSeeder::class,
        'database/seeders/custom/EmployerSeeder.php'       => EmployerSeeder::class,
        'database/seeders/custom/RoleSeeder.php'           => RoleSeeder::class,
        'database/seeders/custom/ResponsibilitySeeder.php' => ResponsibilitySeeder::class,
    ];

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        foreach ($this->customSeeders as $file => $seederClass) {
            if (file_exists(base_path($file))) {
                $this->call($seederClass);
            }
        }
    }
}
