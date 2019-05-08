<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $answers = Answer::all();
        return view('answers.index', compact('answers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answer = new Answer;
        $answer->username = auth()->user()->name;//this here is under testing, I am not sure it will work
        $answer->a1 = $request->q1;
        $answer->a2 = $request->q2;
        $answer->a3 = $request->q3;
        $answer->a4 = $request->q4;
        $answer->a5 = $request->q5;
        $answer->a6 = $request->q6;
        $answer->a7 = $request->q7;
        $answer->a8 = $request->q8;
        $answer->a9 = $request->q9;
        $answer->a10 = $request->q10;
        $answer->a11 = $request->q11;
        $answer->a12 = $request->q12;
        $answer->a13 = $request->q13;
        $answer->a14 = $request->q14;
        $answer->a15 = $request->q15;
        $answer->a16 = $request->q16;
        $answer->a17 = $request->q17;
        $answer->a18 = $request->q18;
        $answer->a19 = $request->q19;
        $answer->a20 = $request->q20;
        $answer->save();
        return redirect('/answers');
    }
  

    /**
     * Display the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        \App\Answer::query()->delete();
        //here we have to tell sql that he has to reset the id numbers
        //ALTER TABLE answers AUTO_INCREMENT = 1
        DB::statement('ALTER TABLE answers AUTO_INCREMENT = 1');
        return redirect('answers');
    }
}
