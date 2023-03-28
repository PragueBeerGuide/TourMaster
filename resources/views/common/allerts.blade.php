@if($errors->all())
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('danger'))
    <div class="alert alert-danger">
        {{ session('danger') }}
    </div>
@endif
