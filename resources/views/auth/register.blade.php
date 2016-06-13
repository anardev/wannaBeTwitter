@extends('layouts.app')

@section('content')
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Registracija</h3>
                                <br>

                                <p>Unesite podatke:</p>
                            </div>
                        </div>
                        <hr>

                        <!-- Register Form -->
                        <div class="form-bottom">
                            @include('errors/errors')
                            {!! Form::open([ 'url' => 'register', 'method' => 'post']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'Ime:', ['class' => 'col-md-4 control-label']) !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Unesite ime...', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('username', 'Korisničko:', ['class' => 'col-md-4 control-label']) !!}
                                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Unesite korisničko ime...', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
                                {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Unesite email...', 'required']) !!}
                            </div>

                            <div class="form-group">
                                {{ Form::label('password', 'Lozinka', ['class' => 'col-md-4 control-label']) }}
                                {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Unesite lozinku..']) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('password_confirmation', 'Potvrdi', ['class' => 'col-md-4 control-label']) }}
                                {{ Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Unesite lozinku ponovo..', 'required']) }}
                            </div>

                            {{ Form::submit('Registriraj se', ['class' => 'btn btn-default']) }}

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h3>...ili se prijavi ovdje:</h3>
                        <br>
                        <a href="{{ url('/login') }}">
                            <button type="submit" class="btn">Prijavi se!</button>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
