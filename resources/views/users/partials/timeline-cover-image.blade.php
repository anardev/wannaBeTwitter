@if(file_exists($user->cover_image))
    <img src="{{ url($user->cover_image) }}">
@else
    <img src="{{ asset('/images/cover/noimage_cover.jpg') }}">
@endif

<!-- Cover Form -->
@if($user->id == Auth::user()->id)
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['PhotosController@update', $user->username], 'files' => 'true'])!!}

    <span class="btn btn-default btn-xs btn-file">
        Odaberi {!! Form::file('cover_image', null, ['class' => 'form-control']) !!}
    </span>

    {{ Form::submit('Unesi cover sliku', ['class' => 'btn btn-default btn-xs']) }}

    {{ Form::close() }}
@endif



