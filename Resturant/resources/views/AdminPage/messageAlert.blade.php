@if (Session::has('success'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('success')}}
    </div>

    @endif

@if (Session::has('delete'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('delete')}}
    </div>

@endif

@if (Session::has('update'))

    <div class="alert alert-success" role="alert">
        <strong>Success:</strong> {{Session::get('update')}}
    </div>

@endif
