<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Exam;
use App\Models\MainQuestion;
use App\Models\Question;
use App\Traits\FileTrait;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    use FileTrait;
    public function create()
    {
        return view('teacher.exams.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'language_id' => 'required',
            'subject_id' => 'required',
            'subject_id' => 'required',
            'lesson_id' => 'required',
            'title' => 'nullable|string|max:255',
            'mainQuestions' => 'required',
        ]);
          $exam = new Exam();
          $exam->title = $request->title;  //todo
          $exam->lesson_id = $request->lesson_id;  //todo
          $exam->unit_id = $request->unit_id;  //todo
          $exam->subject_id = $request->subject_id;  //todo
          $exam->teacher_id = auth('teacher')->user()->id;

          $exam->save();
        foreach($request->mainQuestions as $mainQuestion){
            $mainQuestionStore =new MainQuestion();
            $mainQuestionStore->title = $mainQuestion['title'];
            $mainQuestionStore->body = $mainQuestion['text'];
            $mainQuestionStore->exam_id = $exam->id;
            $mainQuestionStore->image = isset($mainQuestion['image']) ? self::uploadFile($mainQuestion['image'], 'mainquestions/'): null;
            $mainQuestionStore->save();
            foreach($mainQuestion['minor'] as $minor){
                $question = new Question();
                $question->main_question_id = $mainQuestionStore->id;
                $question->body = $minor['title'];
                $question->image = self::uploadFile($minor['image'], 'minorquestions/');
                $question->answer_description = $minor['answerway']['text'];
                $question->answer_image = isset($minor['answerway']['image']) ? self::uploadFile($minor['answerway']['image'], 'answerway/') : null;
                $question->save();
                foreach($minor['answer'] as $key => $answer){
                    $answerStore = new Answer();
                    $answerStore->question_id = $question->id;
                    $answerStore->body = $answer['answer'];
                    $answerStore->image = isset($answer['image']) ? self::uploadFile($answer['image'], 'answer/'): null;
                    if($key == $minor['checked']){
                        $answerStore->correct = 1;
                    }
                    $answerStore->save();
                }
            }
        }
        switch ($request->input('action')) {
            case 'submit':
                $exam->reviewd = 1;
                $exam->save();
                break;

            case 'preview':
                $exam->reviewd = 0;
                $exam->save();
                break;
        }
        return view('teacher.exams.create');
    }
}
