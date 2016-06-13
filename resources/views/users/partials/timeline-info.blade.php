<div class="timeline-info">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-5">

                <!-- Timeline Info -->
                <ul class="list-info">
                    <li>
                        {{ $user->username }}
                    </li>
                    <li>
                        Statusi: {{ count($user->status) }}
                    </li>
                    <li>
                        Following: {{ count($user->follows) }}
                    </li>
                    <li>
                        Followers: {{ count($user->followers) }}
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <div class="pull-right">
                    @if($user->id !== Auth::user()->id)

                        <!-- Follow Form-->
                        @include('users.partials.follow-form')
                    @else
                        <a class="btn btn-default btn-lg pull-right"
                           href="{{ route('users-edit', [ 'users' => $user->username ]) }}"
                           role="button">Ažuriraj
                        </a>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

