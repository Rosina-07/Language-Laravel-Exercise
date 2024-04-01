<?php

namespace Database\Seeders;

use App\Models\Continent;
use App\Models\Difficulty;
use App\Models\Friend;
use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 5; $i++) {
            Language::factory()
                ->recycle(Continent::factory()->create())
                ->recycle(Difficulty::factory()->create())
                ->hasAttached(Friend::factory()->count(rand(1,3))->create())
                ->count(rand(1,5))
                ->create();
        }
    }
}
