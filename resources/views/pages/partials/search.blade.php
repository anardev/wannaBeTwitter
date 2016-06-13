{{ Form::open(['route' => 'results', 'method' => 'get', 'class'=>'navbar-form', 'role'=>'search']) }}
{{ csrf_field() }}
<div class="input-group">
    {!! Form::text('search', null, array('class'=>'form-control', 'placeholder'=>'Pretraži..')) !!}
    <div class="input-group-btn">
        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
</div>
{{ Form::close() }}


