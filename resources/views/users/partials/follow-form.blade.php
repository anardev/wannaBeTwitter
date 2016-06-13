@if($user->isFollowedBy(Auth::user()))
    {{ Form::open([ 'method' => 'delete', 'route' => ['unfollow', $user->id ]]) }}
    <button type="submit" class="btn btn-default">Unfollow {{ $user->username }}</button>
    {{ Form::close()  }}
@else
    {{ Form::open(['route' => 'follows']) }}
    <button type="submit" class="btn btn-default">Follow {{ $user->username }}</button>
    {{ Form::close() }}
@endif
