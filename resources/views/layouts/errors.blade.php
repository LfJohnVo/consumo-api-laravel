@if(count($errors) > 0)
    <div class="alert alert-danger red-text" role="alert">
        <ul>
            @foreach($errors->all() as $error)
                <h5 class="red-text a-heartBeat">{{ $error }}</h5>
            @endforeach
        </ul>
    </div>
@endif

