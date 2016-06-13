@extends('layouts.app')

@section('content')
    <div class="home-wrap">
        <div class="row">
            <div class="container">
                <!-- Statuses Aside -->
                <div class="col-md-3 col-sm-4">
                    @include('statuses.partials.statuses-aside')
                </div>

                <div class="col-md-9 col-sm-8">
                    <!-- Statuses Form-->
                    <div class="status-create">
                        @include('statuses.partials.statuses-form')
                    </div>

                    <!-- Statuses -->
                    <div class="status-display">
                        <br>
                        @include('errors.errors')
                        @include('flash.flash-message')
                        @include('statuses.partials.statuses')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection