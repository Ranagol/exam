@extends('layouts.app')

@section('title', 'exam')

@section('content')
<div class="container">
   
   <p>Welcome, professor!</p>
   <p>Just a few words for you, before starting. With this app you can create up to 20 multiple choice questions for your exam. In the beginning you will have a few questions, answers, students in your database, this is only for demonstrating purposes. As soon as you want to start creating your own exam you need to empty the database.</p>
   <ol>
    <li>Create your questions and possible answers in the "Create questions" section. </li>
    <li>Go to the "Exam" section and answer CORRECTLY all your test question. These answers will be the template for the correct answers, all the other new (student) answers will be checked based on this.</li>
   </ol>
    

    
</div>


@endsection