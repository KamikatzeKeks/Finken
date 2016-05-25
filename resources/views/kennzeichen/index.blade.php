@extends('layouts.master')

@section('content')

<h1>Kennzeichenliste</h1>
<p class="lead"> Liste aller Kennzeichen <a href="{{ route('kennzeichen.create') }}">Add a new one?</a>
</p>
<hr>

@foreach($tasks as $task)
    <h3>{{ $kennzeichen->id }}</h3>
    <p>{{ $kennzeichen->identifier}}</p>
    <p>
        <a href="{{ route('kennzeichen.show', $kennzeichen->id) }}" class="btn btn-info">View Task</a>
        <a href="{{ route('kennzeichen.edit', $kennzeichen->id) }}" class="btn btn-primary">Edit Task</a>
    </p>
    <hr>
@endforeach

@stop