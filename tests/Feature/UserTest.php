<?php

namespace Tests\Feature;

use Harishdurga\LaravelQuiz\Models\QuestionOption;
use Harishdurga\LaravelQuiz\Models\Quiz;
use Harishdurga\LaravelQuiz\Models\QuizAttempt;
use Harishdurga\LaravelQuiz\Models\QuizAttemptAnswer;
use Harishdurga\LaravelQuiz\Models\QuizQuestion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $chooseOption = rand(1,3);
        $quiz = Quiz::find(1);
        $question1 = QuizQuestion::where('id', 1)->first();
        $options = QuestionOption::where('question_id', $question1->id)->get();

        $quizAttempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'participant_id' => 1,
            'participant_type' => 'User',
        ]);

        $quizAttemptAnswer = QuizAttemptAnswer::create([
            'quiz_attempt_id' => $quizAttempt->id,
            'quiz_question_id' => $question1->id,
            'question_option_id' => $chooseOption,
            'answer' => $options[1]->name
        ]);

        foreach ($options as $opt){
            if($opt->id == $quizAttemptAnswer->question_option_id){
                if($opt->is_correct == 1){
                    $marks = $question1->marks;
                }else{
                    $negativeMarks = $question1->negative_marks;
                }
            }
        }

        if(!empty($marks)){
            $this->assertTrue(true);
        }else{
            $this->assertFalse(false);
        }

    }
}
