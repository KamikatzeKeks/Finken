@extends('layouts.master')
@section('content')

<h1> Finken </h1>
<h2> Ihr Suchergebnis</h2>
<div class="col-sm-12">
    <table style="width:100%" class="table table-bordered table-condensed table-hover table-striped">
<tr>
    <td>Kennziffer</td>
    <td>Stadt</td> 
    <td>Landkreis</td>
        <td>Bundesland</td>

  </tr>
    @foreach($tasks as $task)
    
  <tr>
    <td>{{ $task->identifier}}</td>
    <td>{{ $task->Stadt}}</td> 
    <td>{{ $task->Landkreis}}</td>
        <td>{{ $task->Bundesland}}</td>

  </tr>
  
   
    @endforeach
    
    </table>
            <a href="{{ route('home') }}" class="btn btn-primary">zurück</a>

</div>
@stop