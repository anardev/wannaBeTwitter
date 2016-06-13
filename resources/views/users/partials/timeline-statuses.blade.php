<div class="status-display">
    @foreach($user->status as $statuses)
        <div class="panel">
            <div class="panel-element">
                <div class="element-content">
                    <div class="content-post">

                        <!-- User Image -->
                        <div class="post-avatar">
                            @if(file_exists($user->profile_image))
                                <img src="{{ url($user->profile_image) }}" class="img-responsive img-thumbnail">
                            @else
                                <img src="{{ asset('/images/profile/noimage.png') }}" class="img-responsive img-thumbnail">
                            @endif
                        </div>

                        <!-- Status Content -->
                        <div class="post-content">
                                <span class="post-title">
                                    {{ $user->name }}
                                    {{ \Carbon\Carbon::createFromTimeStamp(strtotime($statuses->created_at))->diffForHumans() }}
                                </span>

                            <p class="post-body">{{ $statuses->status }}</p>
                        </div>
                    </div>

                    <!-- Delete Form -->
                    @if($user->id == Auth::user()->id)
                        <div class="delete-btn pull-right">
                            {{ Form::open(['method' => 'get', 'route' => ['status-delete', $statuses->id]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-default btn-xs']) }}
                            {{ Form::close() }}
                        </div>
                    @endif
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach
</div>
