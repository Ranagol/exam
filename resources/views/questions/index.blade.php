@extends('layouts.app')

@section('title', 'exam')

@section('content')
@include(‘errors’)
<div class="container card pt-3">
    <h2>The exam</h2>
    <form method="POST" action="/answers">
    @csrf
        <ul>
            @foreach($questions as $question)
                <strong>Question # {{$question->id}} {{$question->question}}</strong><br>
                <input type="radio" name="q{{$question->id}}" value="{{$question->id}}a" required> {{$question->a_answer}}<br>
                <input type="radio" name="q{{$question->id}}" value="{{$question->id}}b" required> {{$question->b_answer}}<br>
                <input type="radio" name="q{{$question->id}}" value="{{$question->id}}c" required> {{$question->c_answer}}<br>
                <br>
            @endforeach
            <input type="submit" value="Submit"><!--THIS IS THE BUTTON HERE -->
        </ul>
    </form>
    

    
</div>


@endsection
