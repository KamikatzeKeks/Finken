

@extends('layouts.master')

@section('content')

<h1>Finken</h1>
<p class="lead">home.blade ist das hier hier eingabefeld reinmachen.Hier könnte Ihre Werbung stehen oder ein text der Ihnen zeigt wie man dieses Tool verwendet Laravel ist sehr schön </p>
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

<a href="{{ route('kennzeichen.index') }}" class="btn btn-info">Kennzeichen finden</a>
<a href="{{ route('kennzeichen.create') }}" class="btn btn-primary">Add New Task</a>

@stop
  