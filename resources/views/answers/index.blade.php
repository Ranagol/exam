@extends('layouts.app')

@section('title', 'exam')

@section('content')
<div class="container">
    <h1>Testing the answer analyzing tool</h1>

    <table class="table">
        <tr>
            <th>username</th>
            <th>answer a1</th>
            <th>answer a8</th>
        </tr>
        
        @foreach($answers as $answer)
            <tr>
                <td>{{$answer->username}}</td>
                <td>{{$answer->a1}}</td>
                <td>{{$answer->a8}}</td>
            </tr>
            
        @endforeach
    </table>


    <?php
        //$function = "drawDice" . $numberOfDots . "Dot"
        
        foreach ($answers as $answer) {
            
            $superarray[$answer->username]['id'] = $answer->id; 
            $superarray[$answer->username]['username'] = $answer->username;
            $superarray[$answer->username]['answ1'] = $answer->a1;
            $superarray[$answer->username]['answ2'] = $answer->a2;
            $superarray[$answer->username]['answ3'] = $answer->a3;
            $superarray[$answer->username]['answ4'] = $answer->a4;
            $superarray[$answer->username]['answ5'] = $answer->a5;
            $superarray[$answer->username]['answ6'] = $answer->a6;
            $superarray[$answer->username]['answ7'] = $answer->a7;
            $superarray[$answer->username]['answ8'] = $answer->a8;
        }
        echo var_dump($superarray);
    ?>

    

    
</div>


@endsection







