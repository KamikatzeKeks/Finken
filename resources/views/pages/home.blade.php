

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
    {!! Form::label('Geben Sie die Abkürzung des Kennzeichens ein') !!}
    {!! Form::text('identifier', null, 
        array('required', 
              'class'=>'form-control', 
              'placeholder'=>'Kennzeichen Identifier Beispiel DA für Darmstadt')) !!}
</div>




<div class="form-group">
    {!! Form::submit('Kennzeichen suchen', 
      array('class'=>'btn btn-primary')) !!}
</div>
{!! Form::close() !!}








@stop
  