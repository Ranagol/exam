@extends('layouts.app')

@section('title', 'exam')

@section('content')

<div class="container">
    <h3>Create questions and answers</h3>
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


@endsection




