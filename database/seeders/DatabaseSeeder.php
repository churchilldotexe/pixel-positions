<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $tag = Tag::factory(3)->create();
        Job::factory(30)->hasAttached($tag)->create(
            new Sequence(
                [
                    'featured' => false,
                ],
                [
                    'featured' => true,
                ]
            )
        );
    }
}
