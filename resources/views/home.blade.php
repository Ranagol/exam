@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome, <strong>{{auth()->user()->name}}</strong>. Now...
                                       
                    <ol>
                        <li>Go to the "Exam" section and answer  all questions, by choosing one of the offered options.</li>
                        <li>Once you are done with all the answers, click on "submit"</li>
                    </ol>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
