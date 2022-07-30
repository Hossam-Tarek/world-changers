<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Exam;
use App\Models\Language;
use App\Models\Lesson;
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
            'unit_id' => 'nullable',
            'lesson_id' => 'nullable',
            'title' => 'nullable|string|max:255',
            'mainQuestions' => 'required',
        ]);
          $exam = new Exam();
          $exam->title = (isset($request->title) ? $request->title : 'اختبار استاذ '.auth('teacher')->user()->name) ;
          $exam->lesson_id = $request->lesson_id;
          $exam->unit_id = $request->unit_id;
          $exam->subject_id = $request->subject_id;
          $exam->language_id = $request->language_id;
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
                toast('تم نشر الامتحان بنجاح والان تحت المراجعة من إدارة الموقع','success');
                return redirect()->route('home');

            case 'preview':
                toast('تم نشر الامتحان بنجاح والان تحت المراجعة من إدارة الموقع','success');
                $mainId = $exam->mainQuestions[0]->id;
                $examTime = Question::where('main_question_id', $mainId)->count()*3;
                $examLanguage = Language::find($request->language_id)->direction;
                return view('teacher.exams.preview', compact('exam', 'examLanguage','examTime'));
        }
    }
}
