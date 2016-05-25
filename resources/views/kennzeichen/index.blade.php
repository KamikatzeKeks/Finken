@extends('layouts.master')
@section('content')
    @foreach($tasks as $task)
        <h3>{{ $task->all()}}</h3>
        <p>
        </p>
        <hr>
    @endforeach
@stop