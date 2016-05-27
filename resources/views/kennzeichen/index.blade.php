@extends('layouts.master')
@section('content')

<h1> Finken </h1>
<h2> Ihr Suchergebnis</h2>
<div class="col-sm-12">
    <table style="width:100%" class="table table-bordered table-condensed table-hover table-striped">
<tr>
    <td>KFZ-Städtekürzel</td>
    <td>Stadt</td> 
    <td>Landkreis</td>
        <td>Bundesland</td>

  </tr>
    @foreach($kennzeichenObjects as $kennzeichen)
    
  <tr>
    <td>{{ $kennzeichen->identifier}}</td>
    <td>{{ $kennzeichen->Stadt}}</td> 
    <td>{{ $kennzeichen->Landkreis}}</td>
        <td>{{ $kennzeichen->Bundesland}}</td>

  </tr>
  
   
    @endforeach
    
    </table>
            <a href="{{ route('home') }}" class="btn btn-primary">zurück</a>

</div>
@stop