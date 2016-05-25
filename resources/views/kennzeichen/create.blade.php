@extends('layouts.master')

@section('content')

<h1>Kennzeichen hinzufügen</h1>
<p class="lead">Zur Kennzeichenliste darunter hinzufügen</p>
<hr>

{!! Form::open([
    'kennzeichen' => 'KennzeichenController.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('neues Kennzeichen anlegen', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop