@if(count($errors) > 0)
    @foreach($errors->all() as $error)
            <div class="card">
                {{$error}}
            </div>
    @endforeach
@endif
