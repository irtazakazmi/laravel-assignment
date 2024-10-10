<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Harishdurga\LaravelQuiz\Models\QuestionOption;
use Harishdurga\LaravelQuiz\Models\Quiz;
use Harishdurga\LaravelQuiz\Models\QuizQuestion;
use Harishdurga\LaravelQuiz\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quiz_options = [
            [
                'question_id' => 1,
                'name' => 'Programming language',
                'media_url' => null,
                'media_type' => null,
                'is_correct' => false,
            ], [
                'question_id' => 1,
                'name' => 'A set of commands that must be followed',
                'media_url' => null,
                'media_type' => null,
                'is_correct' => true,
            ], [
                'question_id' => 2,
                'name' => 'Name of person',
                'media_url' => null,
                'media_type' => null,
                'is_correct' => false,
            ], [
                'question_id' => 2,
                'name' => 'Framework',
                'media_url' => null,
                'media_type' => null,
                'is_correct' => true,
            ], [
                'question_id' => 3,
                'name' => 'Product of NASA',
                'media_url' => null,
                'media_type' => null,
                'is_correct' => false,
            ], [
                'question_id' => 3,
                'name' => 'Programming Language',
                'media_url' => null,
                'media_type' => null,
                'is_correct' => true,
            ],
        ];

        foreach ($quiz_options as $quiz_option) {
            QuestionOption::create($quiz_option);
        }
    }
}
