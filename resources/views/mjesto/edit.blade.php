@extends('master')
@section('title', 'Uredi mjesto')
@section('content')


<!-- TODO napravi breadcrumb -->
<nav class="breadcrumb">
  <a class="breadcrumb-item" href="/">Home</a>
  <a class="breadcrumb-item" href="/Mjesto">Mjesto</a>
  <a class="breadcrumb-item" href="/Mjesto/{{ $mjesto->id}}">{{ $mjesto->id}}</a>
  <span class="breadcrumb-item active">Edit</span>
</nav>
<br>

<h1>Uredi mjesto {{ $mjesto->naziv}}</h1>
    
    
    <div>
        <!-- TODO: pogledaj verziju 5.5 -->
  {{ Form::model($mjesto, array('action'=>array('MjestoController@update',$mjesto->id), 'method'=>'PUT')) }}
      <div>
    {{ Form::label('id','Šifra mjesta') }}
    <input readonly type="number" value="{{ $mjesto->id}}" name='id' class='form-control'>
  </div>
   <div>
    {{ Form::label('zupanija_id','Šifra županije') }}
    <input type="number" value="{{ $mjesto->zupanija_id}}" name='zupanija_id' class='form-control'>
  </div>
     <div>
    {{ Form::label('pbr','Poštanski broj') }}
    <input type="number" value="{{ $mjesto->pbr}}" name='pbr' class='form-control'>
  </div>
    <div>
    {{ Form::label('naziv','Naziv mjesta') }}
    <input type="text" maxlength="40" value="{{ $mjesto->naziv}}" name='naziv' class='form-control'>
  </div>   
  {{ Form::submit('Uredi mjesto', array('class'=>'btn btn-primary', 'id'=>'mjesto-dodaj'))}}
</div>
@endsection