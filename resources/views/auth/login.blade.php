@extends('layouts.app')

@section('content')
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Prijavite se</h3>
                                <br>

                                <p>Unesite korisničko ime i lozinku:</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Login Form -->
                        <div class="form-bottom">
                            @include('errors/errors')

                            {!! Form::open([ 'url' => 'login', 'method' => 'post', 'class' => 'login-form']) !!}

                            <div class="form-group">
                                {!! Form::label('username', 'Korisničko:', ['class' => 'col-md-4 control-label']) !!}
                                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Unesite korisničko ime...', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Lozinka', ['class' => 'col-md-4 control-label']) }}
                                {{ Form::password('password', ['class' => 'form-password form-control', 'placeholder' => 'Unesite lozinku..']) }}
                            </div>

                            {{ Form::submit('Prijavi se', ['class' => 'btn btn-default']) }}

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h3>...ili se registriraj ovdje:</h3>
                        <br>
                        <a href="{{ url('/register') }}">
                            <button type="submit" class="btn">Registriraj se!</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
