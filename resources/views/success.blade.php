@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Success!</div>

                <div class="card-body">
                    
                <strong>{{auth()->user()->name}}</strong>, you have succesfully submitted your exam answers. You can close this app now.
                                       
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection