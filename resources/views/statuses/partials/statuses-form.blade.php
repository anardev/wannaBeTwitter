<div class="panel panel-default">
    <h2>Što ti je na umu?</h2>

    {{ Form::open() }}
    <div class="panel-body">
        <div class="form-group">
            {{ Form::textarea('status', null, ['class' => 'form-control', 'rows' => '3', 'placeholder' => 'Unesi wannabe status..']) }}
        </div>
    </div>

    <div class="panel-footer">
        {{ Form::submit('Objavi wannabe status', ['class' => 'btn btn-default pull-right']) }}
        <div class="clearfix"></div>
    </div>
    {{ Form::close() }}

</div>
