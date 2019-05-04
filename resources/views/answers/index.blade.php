@extends('layouts.app')

@section('title', 'exam')

@section('content')
<div class="container">
    <h1>Testing the answer analyzing tool</h1>




    <?php
        foreach ($answers as $answer) {
            //$superarray[$answer->username]['id'] = $answer->id; 
            //$superarray[$answer->username]['username'] = $answer->username;
            $superarray[$answer->id]['answ1'] = $answer->a1;
            $superarray[$answer->id]['answ2'] = $answer->a2;
            $superarray[$answer->id]['answ3'] = $answer->a3;
            $superarray[$answer->id]['answ4'] = $answer->a4;
            $superarray[$answer->id]['answ5'] = $answer->a5;
            $superarray[$answer->id]['answ6'] = $answer->a6;
            $superarray[$answer->id]['answ7'] = $answer->a7;
            $superarray[$answer->id]['answ8'] = $answer->a8;
        }
        //echo var_dump($superarray['examadmin@gmail.com']);
        //echo var_dump($superarray['examstudent1@gmail.com']);
        //echo var_dump($superarray['examstudent2@gmail.com']);
        echo var_dump($superarray);
        echo var_dump($superarray[1]);
        echo var_dump($superarray[2]);
        echo var_dump($superarray[3]);



        for ($i=0; $i < count($superarray); $i++) { 
            echo 'bla bla' . '<br>';
            $x = $i + 1;
            $compare = array_intersect($superarray[1], $superarray[$x]);
            echo 'Superarray[' . $x . '] has ' . count($compare) . ' correct answers.' . '<br>';
            $correctAnswers[$x] = count($compare);
        }

        var_dump($correctAnswers);

        //we need the biggest question id, in order to get the number of the questions. And we need this number for the percentage result.
        $numberOfQuestions = $correctAnswers[1];
        echo $numberOfQuestions;




    ?>

    <table class="table">
        <tr>
            <th>username</th>
            <th>Correct answers</th>
            <th>Score (0-100)</th>
            <th>Status</th>
        </tr>
        
        @foreach($answers as $answer)
            <tr>
                <td>{{$answer->username}}</td>
                <td>{{$correctAnswers[$answer->id]}}</td><!--number of correct answers-->
                <td>{{100*$correctAnswers[$answer->id]/$numberOfQuestions}}</td><!--% of correct answers-->
                <td><!--PASSED/FAILED STATUS-->
                    <?php
                    if (100*$correctAnswers[$answer->id]/$numberOfQuestions < 50) {
                        echo 'FAILED';
                    } else {
                        echo 'PASSED';
                    }
                    ?>                    
                </td><!--% of correct answers-->
            </tr>
            
        @endforeach
    </table>
    

    
</div>


@endsection







