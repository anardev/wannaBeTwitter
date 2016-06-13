@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- Users Edit Form -->
                {!! Form::model($user, ['method' => 'PATCH', 'action' => [ 'UsersController@update', $user->username ], 'files' => 'true']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Ime i prezime:', ['class' => 'col-md-4 control-label']) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Unesite ime..', 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('username', 'Korisničko ime:', ['class' => 'col-md-4 control-label']) !!}
                    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Unesite korisničko ime..', 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email:', ['class' => 'col-md-4 control-label']) !!}
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Unesite email..', 'required']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Opis:', ['class' => 'col-md-4 control-label']) !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Unesite opis..']) !!}
                </div>

                {{ Form::submit('Update', ['class' => 'btn btn-default']) }}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
