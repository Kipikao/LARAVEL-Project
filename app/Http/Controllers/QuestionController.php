<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{

    // Non user
    public function question()
    {
        // $userId = Auth::user()->id;where('user_id', $userId)->
        $question = Question::latest()->paginate(5);
        return view('questions', ['question' => $question]);
    }

    public function add()
    {

        return view('questions.addQuestion');
    }


    public function store(Request $request)
    {
        $test = $request->all();
        if (Auth::user()) {
            $test = $request->validate([
                'message' => 'required'
            ]);
            $test['user_id'] = Auth::user()->id;
            $test['name'] = Auth::user()->name;
        } else {
            $test = $request->validate([

                'name' => 'required',
                'message' => 'required'
            ]);
        }

        $newQuestion = Question::create($test);

        return redirect(route('questions'))->with('success', 'Întrebarea a fost adăugată cu succes');
    }

    public function edit(Question $question)
    {
        return view('questions.edit', ['question' => $question]);
    }

/*
  *  For user login
*/

   
    public function questionuser()
    {
        // $userId = Auth::user()->id;where('user_id', $userId)->
        $question = Question::latest()->paginate(5);
        
        return view('questions.user.questions', ['question' => $question]);
    }

    public function adduser()
    {

        return view('questions.user.addQuestion');
    }

    public function storeuser(Request $request)
    {
        $test = $request->all();
       
            $test = $request->validate([
                'message' => 'required'
            ]);
            $test['user_id'] = Auth::user()->id;
            $test['name'] = Auth::user()->name;
        

        $newQuestion = Question::create($test);

        return redirect(route('questions.user'))->with('success', 'Întrebarea a fost adăugată cu succes');
    }
    public function editadmin(Question $question)
    {
        return view('admin.question.edit', ['question' => $question]);
    }

    

    public function edituser(Question $question)
    {
        return view('questions.user.editUser', ['question' => $question]);
    }

    public function updateuser(Question $question, Request $request)
    {
        $data = $request->validate([
            
            'message' => 'required',
        ]);
        $question->update($data);
        return redirect(route('questions.user'))->with('success', 'Întrebarea a fost modifică cu succes');
    }

    public function destroyuser(Question $question)
    {
        $question->delete();
        return redirect(route('questions.user'))->with('success', 'Întrebarea a fost ștearsă');
    }


    
    public function update(Question $question, Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'message' => 'required',
            'answer' => 'required',
            'status' => 'required'
        ]);
        $question->update($data);
        return redirect(route('questions.admin'));
    }

    public function destroyadmin(Question $question)
    {
        
        $question->delete();
        return redirect(route('questions.admin'))->with('success', 'Întrebarea a fost ștearsă');
    }

    // For admin questions

    public function questionadmin()
    {
        // $userId = Auth::user()->id;where('user_id', $userId)->
        $question = Question::latest()->paginate(5);
        return view('admin.question.questions', ['question' => $question]);
    }
    
    public function adminque()
    {
        $questions = Question::latest()->paginate(10);
        return view('admin.question.editQuestion', ['questions' => $questions]);
    }

    public function showque($id) {
        $questions = Question::latest()->paginate(10);
        $question = Question::findOrFail($id);

        return view('admin.question.viewQuestion', ['question' => $question , 'questions'=>$questions]);
    }

    public function editQue(Question $id)
    {
        $questions = Question::latest()->paginate(10);
        return view('admin.question.answerQue', ['question' => $id, 'questions' => $questions]);
    }

    public function updateque(Question $id, Request $request)
    {
        $data = $request->validate([
            'answer' => 'required',
            'status' => 'required'
        ]);
        $id->update($data);
        return redirect(route('viewQuestion',['id' => $id]))->with('success', 'Răspunsul a fost trimis');
    }

    public function destroyque(Question $id)
    {
        
        $id->delete();
        return redirect(route('adminQuestion'))->with('success', 'Mesajul a fost sters');
    }
}


