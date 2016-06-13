@foreach($statuses as $status)
    <div class="panel">
        <div class="panel-element">
            <div class="element-content">
                <div class="content-post">

                    <!-- User Image -->
                    <div class="post-avatar">
                        @if(file_exists($status->user->profile_image))
                            <img src="{{ url($status->user->profile_image) }}" class="img-responsive img-thumbnail">
                        @else
                            <img src="{{ asset('/images/profile/noimage.png') }}" class="img-responsive img-thumbnail">
                        @endif
                    </div>

                    <!-- Status Content -->
                    <div class="post-content">
                         <span class="post-title">
                             <a href="{{ route('timeline', [ 'users' => $status->user->username ]) }}">
                                 {{ $status->user->username }}
                             </a>
                         </span>
                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($status->created_at))->diffForHumans() }}
                        <p class="post-body">{{ $status->status }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{ $statuses->links() }}


