@extends('layouts.app')

@section('title', 'exam')

@section('content')
@include('errors')

<div class="container card pt-3">
    <h3>List of current exam questions and answers</h3>
    <p>This is the list of the current questions. You can also edit these question by clicking on the link. This list is  just an overview of the current questions, and it can't be used for exam purposes.</p>

    <ul>
        @foreach($questions as $question)
            Question # {{$question->id}} <a href="/questions/{{$question->id}}">{{$question->question}}</a><br><!--QUESTION-->
            <input type="radio" name="q{{$question->id}}" value="{{$question->id}}a" required> {{$question->a_answer}}<!--ANSWER A--><br>
            <input type="radio" name="q{{$question->id}}" value="{{$question->id}}b" required> {{$question->b_answer}}<!--ANSWER B--><br>
            <input type="radio" name="q{{$question->id}}" value="{{$question->id}}c" required> {{$question->c_answer}}<!--ANSWER C--><br>
            <br>
        @endforeach
    </ul>
        
</div>




<div class="container card pt-3 pb-3">
    <h3>Add new questions and answers to the list</h3>
    <form method="POST" action="/questions">
        @csrf
        <div class="form-group">
            <label for="Question">Question</label>
            <textarea class="form-control" rows="3" name="question" required></textarea>
        </div>

        <div class="form-group">
            <label for="a_answer">a_answer</label>
            <textarea class="form-control" rows="2" name="a_answer" required></textarea>
        </div>

        <div class="form-group">
            <label for="b_answer">b_answer</label>
            <textarea class="form-control" rows="2" name="b_answer" required></textarea>
        </div>

        <div class="form-group">
            <label for="c_answer">c_answer</label>
            <textarea class="form-control" rows="2" name="c_answer" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
        
    </form>
</div>

<div class="container card pt-3">
    <h3>Creating a new exam</h3>
    <p>When you want to create a new exam, with new questions and answers, first you need to delete the old exam questions and answers. </p>

    <form method="POST" action="/deleteanswers">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" name="submit" value="Submit">Delete all exam answers</button>
    </form>

    <br>

    <form method="POST" action="/deletequestions">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" name="submit" value="Submit">Delete all questions</button>
    </form>

    <p>Once you are done with deleting, you can start creating the new questions with the form "Add new questions and answers to the list". When you are done with the questions, you need to go to the Exam page (just like a student) and answer CORRECTLY all questions. All the future student answers will be checked and scored based ond this template.</p>
</div>







@endsection




