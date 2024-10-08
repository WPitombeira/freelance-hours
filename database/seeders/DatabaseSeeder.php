<?php

namespace Database\Seeders;

use App\Models\{User, Project};
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     */
    public function run(): void {
        User::factory()->count(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()->each(function (User $user) {
            // $user->projects()->saveMany(Project::factory()->count(5)->make());
            Project::factory()->create(['created_by' => $user->id]);
        });

    }
}
