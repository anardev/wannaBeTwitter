@extends('layouts.app')

@section('content')
    <div class="timeline-wrap">
        <!-- Timeline Showcase -->
        @include('users.partials.timeline-showcase')

        <!-- Timeline Info -->
        @include('users.partials.timeline-info')

        <br>
        <!-- Timeline Statuses -->
        <div class="container">
            @include('errors.errors')
            @include('flash.flash-message')
            @include('users.partials.timeline-statuses')
        </div>
    </div>
@endsection