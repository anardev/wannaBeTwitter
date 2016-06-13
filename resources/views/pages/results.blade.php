@extends('layouts.app')

@section('content')
    <div class="results-wrap">
        <div class="container">
            @include('flash.flash-message')
            @if($search->count())
                @foreach($search as $results)
                    <div class="panel">
                        <div class="panel-element">
                            <div class="element-content">
                                <div class="content-post">

                                    <!-- Profile Image -->
                                    <div class="post-avatar">
                                        @if(file_exists($results->profile_image))
                                            <img src="{{ url($results->profile_image) }}"
                                                 class="img-responsive img-thumbnail">
                                        @else
                                            <img src="{{ asset('/images/profile/noimage.png') }}"
                                                 class="img-responsive img-thumbnail">
                                        @endif
                                    </div>

                                    <!-- Results Content -->
                                    <div class="post-content">
                                         <span class="post-title">
                                             <a href="{{ route('timeline', [ 'users' => $results->username ]) }}">
                                                 {{ $results->username }}
                                             </a>
                                         </span>

                                        <!-- Results Follow Form -->
                                        @if(Auth::check())
                                            @if($results->id !== Auth::user()->id)
                                                <div class="pull-right">
                                                    @if($results->isFollowedBy(Auth::user()))
                                                        {{ Form::open([ 'method' => 'delete', 'route' => ['unfollow', $results->id ]]) }}
                                                        {{ Form::hidden('idUserUnfollow') }}
                                                        <button type="submit" class="btn btn-default">
                                                            Unfollow {{ $results->username }}</button>
                                                        {{ Form::close()  }}
                                                    @else
                                                        {{ Form::open(['route' => 'follows']) }}
                                                        {{ Form::hidden('userId', $results->id) }}
                                                        <button type="submit" class="btn btn-default">
                                                            Follow {{ $results->username }}</button>
                                                        {{ Form::close() }}
                                                    @endif
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h4>Nema rezultata.</h4>
            @endif
            {{ $search->appends(Request::only('search'))->links() }}
        </div>
    </div>
@endsection
