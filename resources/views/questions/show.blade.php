@extends('layouts.app')

@section('title', 'exam')

@section('content')
<div class="container card pt-3 pb-3">
    <h2>Edit the question and the answers</h2>
    <form method="POST" action="/questions/{{$question->id}}">
    @csrf @method('PATCH')
        <div class="form-group">
            <label for="Question">Question</label>
            <textarea class="form-control" rows="3" name="question" required>{{$question->question}}</textarea><!--QUESTION-->
        </div>

        <div class="form-group">
            <label for="a_answer">a_answer</label>
            <textarea class="form-control" rows="2" name="a_answer" required>{{$question->a_answer}}</textarea><!--ANSWER A-->
        </div>

        <div class="form-group">
            <label for="b_answer">b_answer</label>
            <textarea class="form-control" rows="2" name="b_answer" required>{{$question->b_answer}}</textarea><!--ANSWER B-->
        </div>

        <div class="form-group">
            <label for="c_answer">c_answer</label>
            <textarea class="form-control" rows="2" name="c_answer" required>{{$question->c_answer}}</textarea><!--ANSWER C-->
        </div>

        <button type="submit" class="btn btn-primary" name="edit" value="edit">Update</button>
        
    </form>
</div>



@endsection