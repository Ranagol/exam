@extends('layouts.app')

@section('title', 'exam')

@section('content')
<div class="container">
    <form method="POST" action="/answers">
    @csrf
        <ul>
            @foreach($questions as $question)
                <strong>Question # {{$question->id}} {{$question->question}}</strong><br>
                <input type="radio" name="q{{$question->id}}" value="a{{$question->id}}"> {{$question->a_answer}}<br>
                <input type="radio" name="q{{$question->id}}" value="b{{$question->id}}"> {{$question->b_answer}}<br>
                <input type="radio" name="q{{$question->id}}" value="c{{$question->id}}"> {{$question->c_answer}}<br>
                <br>
            @endforeach
            <input type="submit" value="Submit">
        </ul>
    </form>
    

    
</div>


@endsection
