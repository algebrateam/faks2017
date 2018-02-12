@extends('master')
@section('title', 'kreiraj novu zupaniju')
@section('content')
<h1>Dodaj novu županiju</h1>
    
    
    <div>
  {{ Form::open(array('url'=>'Zupanija')) }}
      <div>
    {{ Form::label('id','Šifra zupanije') }}
    <input readonly type="number" value="{{old('id')}}" name='id' class='form-control'>
  </div>
    <div>
    {{ Form::label('naziv','Naziv zupanije') }}
 <input type="text" value="{{old('naziv')}}" name='naziv' class='form-control'>
  </div>   
  {{ Form::submit('Dodaj novu županiju', array('class'=>'btn btn-primary', 'id'=>'zupanija-dodaj'))}}
</div>
@endsection