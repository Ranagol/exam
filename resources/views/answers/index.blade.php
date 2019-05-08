@extends('layouts.app')

@section('title', 'exam')

@section('content')
@include('errors')
<div class="container">





    <h1>Exam results</h1><!--------------EXAM RESULTS------------------------------------->

    <?php
        //DATA FROM DB IS PLACED INTO ARRAYS
        foreach ($answers as $answer) {//the sub-arrays are called by the id number, because later we will need this number-name for crucial iterating purposes. The $superarray contains all the sub-arrays.
            $superarray[$answer->id]['username'] = $answer->username;
            
            if ($answer->a1 !== null) {
                $superarray[$answer->id]['answ1'] = $answer->a1;
            }
            if ($answer->a2 !== null) {
                $superarray[$answer->id]['answ2'] = $answer->a2;
            }
            if ($answer->a3 !== null) {
                $superarray[$answer->id]['answ3'] = $answer->a3;
            }
            if ($answer->a4 !== null) {
                $superarray[$answer->id]['answ4'] = $answer->a4;
            }
            if ($answer->a5 !== null) {
                $superarray[$answer->id]['answ5'] = $answer->a5;
            }
            if ($answer->a6 !== null) {
                $superarray[$answer->id]['answ6'] = $answer->a6;
            }
            if ($answer->a7 !== null) {
                $superarray[$answer->id]['answ7'] = $answer->a7;
            }
            if ($answer->a8 !== null) {
                $superarray[$answer->id]['answ8'] = $answer->a8;
            }   
            if ($answer->a9 !== null) {
                $superarray[$answer->id]['answ9'] = $answer->a9;
            }
            if ($answer->a10 !== null) {
                $superarray[$answer->id]['answ10'] = $answer->a10;
            }
            if ($answer->a11 !== null) {
                $superarray[$answer->id]['answ11'] = $answer->a11;
            }
            if ($answer->a12 !== null) {
                $superarray[$answer->id]['answ12'] = $answer->a12;
            }
            if ($answer->a13 !== null) {
                $superarray[$answer->id]['answ13'] = $answer->a13;
            }
            if ($answer->a14 !== null) {
                $superarray[$answer->id]['answ14'] = $answer->a14;
            }
            if ($answer->a15 !== null) {
                $superarray[$answer->id]['answ15'] = $answer->a15;
            }
            if ($answer->a16 !== null) {
                $superarray[$answer->id]['answ16'] = $answer->a16;
            }
            if ($answer->a17 !== null) {
                $superarray[$answer->id]['answ17'] = $answer->a17;
            }
            if ($answer->a18 !== null) {
                $superarray[$answer->id]['answ18'] = $answer->a18;
            }
            if ($answer->a19 !== null) {
                $superarray[$answer->id]['answ19'] = $answer->a19;
            }
            if ($answer->a20 !== null) {
                $superarray[$answer->id]['answ20'] = $answer->a20;
            }
        }

        if (!isset($superarray)) {
            die('There are no results at this moment. All the exam answers are deleted. ');
        }

        //echo var_dump($superarray);//This $superarray contains all the sub-arrays.
        //echo var_dump($superarray[1]);//id 1 answers here
        //echo var_dump($superarray[2]);//id 2 answers here
        //echo var_dump($superarray[3]);//id 3 answers here

        //COMPARING STUDENT ANSWERS WITH THE CORRECT ANSWERS

        
        
        for ($i=0; $i < count($superarray); $i++) {
            $x = $i + 1;         
            $compare = array_intersect($superarray[1], $superarray[$x]);//we are comparing all the answers with the right answers here
            //echo 'Superarray[' . $x . '] has ' . count($compare) . ' correct answers.' . '<br>';
            $correctAnswers[$x] = count($compare) - 1;//here we are defining the current number of questions.          
        }
        //var_dump($correctAnswers);
    
        $numberOfQuestions = $correctAnswers[1];//we need the biggest question id, in order to get the number of the questions. And we need this number for the percentage result. The amount of correct answers from the professor is = to the amount of questions.
        //echo $numberOfQuestions;





        
        
        
        

    ?>

    <p>Number of all exam questions: {{$numberOfQuestions}} </p>
    <table class="table">
        <tr>
            <th>username</th>
            <th>Correct answers</th>
            <th>Wrong answers</th>
            <th>Score (0-100)</th>
            <th>Status</th>
        </tr>
        
        <!--THE FINAL RESULT TABLE-->
        @foreach($answers as $answer)
            <tr>
                <td>{{$answer->username}}</td>
                <td>{{$correctAnswers[$answer->id]}}</td><!--number of correct answers-->
                <td>{{$numberOfQuestions - $correctAnswers[$answer->id] }}</td><!--wrong answers-->
                <td>{{100*$correctAnswers[$answer->id]/$numberOfQuestions}}</td><!--score (from 1 till 100)-->           
                <td><!--PASSED/FAILED STATUS-->
                    <?php
                        if (100*$correctAnswers[$answer->id]/$numberOfQuestions < 50) {
                            echo 'FAILED';
                        } else {
                            echo 'PASSED';
                        }
                    ?>                    
                </td>
            </tr>            
        @endforeach
    </table>

    <?php
        //var_dump($superarray);
    ?>
    
    <h1>Exam details</h1>
    <table class="table">
        <tr><!--DYNAMIC TABLE HEADER-->
            
            <?php
                foreach ($superarray[1] as $key => $value) {
                echo '<th>' . $key . '</th>';
                }
            ?>
        </tr>
        <tr><!--DYNAMIC TABLE BODY-->
            
            <?php
                foreach ($superarray as $subarray) {
                    echo '<tr>';
                                                 
                        foreach ($subarray as $key => $value) {
                           echo '<td>' . $value . '</td>'; 
                        }
                    echo '</tr>';
                }
            ?>
        </tr>        
    </table>
</div>

@endsection

