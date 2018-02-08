@extends('master')
@section('title', 'Uredi zupaniju')
@section('content')
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
 <input type="text" value="{{ $zupanija->naziv}}" name='naziv' class='form-control'>
  </div>   
  {{ Form::submit('Uredi županiju', array('class'=>'btn btn-primary', 'id'=>'zupanija-dodaj'))}}
</div>
@endsection