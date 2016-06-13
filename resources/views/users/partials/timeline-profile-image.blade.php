@if(file_exists($user->profile_image))
    <img src="{{ url($user->profile_image) }}" class="img-responsive img-thumbnail">
@else
    <img src="{{ asset('/images/profile/noimage.png') }}" class="img-responsive img-thumbnail">
@endif

<!-- Profile Form -->
@if($user->id == Auth::user()->id)
    {!! Form::model($user, ['method' => 'PATCH', 'action' => ['PhotosController@update', $user->username],'files' => 'true'])!!}

    <span class="btn btn-default btn-xs btn-file">
        Odaberi {!! Form::file('profile_image', null, ['class' => 'form-control']) !!}
    </span>

    {{ Form::submit('Unesi sliku profila', ['class' => 'btn btn-default btn-xs']) }}

    {{ Form::close() }}
@endif
