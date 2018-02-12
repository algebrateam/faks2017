@extends('master')
@section('title', 'Uredi zupaniju')
@section('content')


<!-- TODO napravi breadcrumb -->
<nav class="breadcrumb">
  <a class="breadcrumb-item" href="/">Home</a>
  <a class="breadcrumb-item" href="/Zupanija">Zupanija</a>
  <a class="breadcrumb-item" href="/Zupanija/{{ $zupanija->id}}">{{ $zupanija->id}}</a>
  <span class="breadcrumb-item active">Edit</span>
</nav>
<br>

<h1>Uredi županiju {{ $zupanija->naziv}}</h1>
    
    
    <div>
        <!-- TODO: pogledaj verziju 5.5 -->
  {{ Form::model($zupanija, array('action'=>array('ZupanijaController@update',$zupanija->id), 'method'=>'PUT')) }}
      <div>
    {{ Form::label('id','Šifra zupanije') }}
    <input readonly type="number" value="{{ $zupanija->id}}" name='id' class='form-control'>
  </div>
    <div>
    {{ Form::label('naziv','Naziv zupanije') }}
    <input type="text" maxlength="40" value="{{ $zupanija->naziv}}" name='naziv' class='form-control'>
  </div>   
  {{ Form::submit('Uredi županiju', array('class'=>'btn btn-primary', 'id'=>'zupanija-dodaj'))}}
</div>
@endsection