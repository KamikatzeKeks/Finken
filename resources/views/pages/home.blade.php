

@extends('layouts.master')

@section('content')

<h1>Finken</h1>
<p class="lead">home.blade ist das hier hier eingabefeld reinmachen.Hier könnte Ihre Werbung stehen oder ein text der Ihnen zeigt wie man dieses Tool verwendet Laravel ist sehr schön </p>
<hr>
{!! Form::open([
    'route' => 'kennzeichen.store'
]) !!}

<div class="form-group">
    {!! Form::label('identifier', 'Anfangsbuchstaben:', ['class' => 'control-label']) !!}
    {!! Form::text('identifier', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

<a href="{{ route('kennzeichen.index') }}" class="btn btn-info">Kennzeichen finden</a>
<a href="{{ route('kennzeichen.create') }}" class="btn btn-primary">Add New Task</a>

@stop
  