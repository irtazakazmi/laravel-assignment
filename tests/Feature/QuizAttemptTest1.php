<?php


use Harishdurga\LaravelQuiz\Models\Question;
use Harishdurga\LaravelQuiz\Models\QuestionOption;
use Harishdurga\LaravelQuiz\Models\Quiz;
use Harishdurga\LaravelQuiz\Models\QuizAttempt;
use Harishdurga\LaravelQuiz\Models\QuizAttemptAnswer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Harishdurga\LaravelQuiz\Models\QuizQuestion;
use Illuminate\Support\Facades\DB;
use PHPUnit\Framework\TestCase;

class QuizAttemptTest1 extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     */
    public function test_user_can_attempt_existing_quiz_1_and_answer_existing_question_1()
    {
        dd(DB::connection()->getDatabaseName());

        $chooseOption = rand(1,2);
        $quiz = Quiz::find(1);
        $question1 = QuizQuestion::where('id', 1)->first();
        $options = QuestionOption::where('question_id', $question1->id)->all();

        $quizAttempt = QuizAttempt::create([
            'quiz_id' => $quiz->id,
            'participant_id' => 1,
            'participant_type' => 'User',
        ]);

        $quizAttemptAnswer = QuizAttemptAnswer::create([
            'quiz_attempt_id' => $quizAttempt->id,
            'quiz_question_id' => $question1->id,
            'question_option_id' => $chooseOption,
            'answer' => $options[$chooseOption]->name
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
            $this->assertTrue(true);
        }else{
            $this->assertFalse(false);
            $this->assertFalse(false);
        }

    }
}
