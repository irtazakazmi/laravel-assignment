<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\Quiz;
use Harishdurga\LaravelQuiz\Models\QuizQuestion;
use Harishdurga\LaravelQuiz\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quiz_questions = [[
            'quiz_id' => 1,
            'question_id' => 1,
            'marks' => 3,
            'order' => 1,
            'negative_marks' => 1,
            'is_optional' => false
        ], [
            'quiz_id' => 1,
            'question_id' => 2,
            'marks' => 3,
            'order' => 2,
            'negative_marks' => 1,
            'is_optional' => false
        ], [
            'quiz_id' => 1,
            'question_id' => 3,
            'marks' => 3,
            'order' => 3,
            'negative_marks' => 1,
            'is_optional' => false
        ]];

        foreach ($quiz_questions as $quiz_question) {
            $quiz_question = QuizQuestion::create($quiz_question);
        }
    }
}
