<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Harishdurga\LaravelQuiz\Models\QuestionOption;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test Quiz User',
            'email' => 'quiz@example.com',
        ]);

        $this->call(TopicSeeder::class);

        $this->call(QuestionTypeSeeder::class);

        $this->call(QuestionSeeder::class);

        $this->call(QuizSeeder::class);

        $this->call(QuizQuestionSeeder::class);

        $this->call(QuestionOptionSeeder::class);

    }
}
