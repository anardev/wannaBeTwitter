@if (session('status'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
@endif
@if (session('warning'))
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('warning') }}
    </div>
@endif