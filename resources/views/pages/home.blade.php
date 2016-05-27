

@extends('layouts.master')

@section('content')

<h1>Finken</h1>

@if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
@endif

{!! Form::open(array('route' => 'findKennzeichen', 'class' => 'form')) !!}

<div class="form-group">
    {!! Form::label('KFZ-Städtekürzel') !!}
    {!! Form::text('identifier', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Geben Sie ein KFZ-Städtekürzel ein(Bsp: DA)')) !!}
</div>




<div class="form-group">
    {!! Form::submit('Kennzeichen suchen', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}








@stop
  