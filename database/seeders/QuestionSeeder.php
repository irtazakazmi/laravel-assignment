<?php

namespace Database\Seeders;

use Harishdurga\LaravelQuiz\Models\Question;
use Harishdurga\LaravelQuiz\Models\QuestionType;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [[
            'name' => 'What is an algorithm?',
            'question_type_id' => 1,
            'is_active' => true,
            'media_url' => 'url',
            'media_type' => 'image'
        ], [
            'name' => 'What is an laravel?',
            'question_type_id' => 1,
            'is_active' => true,
            'media_url' => 'url',
            'media_type' => 'image'
        ], [
            'name' => 'What is an python?',
            'question_type_id' => 1,
            'is_active' => true,
            'media_url' => 'url',
            'media_type' => 'image'
        ]];
        foreach ($questions as $question) {
            $question_one = Question::create($question);
        }
    }
}
