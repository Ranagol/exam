<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()//this needs authorization
    {
        if (auth()->id() == 1) {
            $questions = Question::all();
            return view('questions.create', compact('questions'));
        } else {
            echo "Sorry, this site is only for the admin. Your exam is here: " . '<a href="/questions">Do the exam!</a>';
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = new Question;
        $question->question = $request->question;
        $question->a_answer = $request->a_answer;
        $question->b_answer = $request->b_answer;
        $question->c_answer = $request->c_answer;
        $question->save();
        return redirect('/questions');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('questions/show', compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('questions.edit', compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //$post->title = request('title');
        //$post->content = request('content');
        //$post->save();
        $question->question = $request->question;
        $question->a_answer = $request->a_answer;
        $question->b_answer = $request->b_answer;
        $question->c_answer = $request->c_answer;
        $question->save();
        return redirect('/questions/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
