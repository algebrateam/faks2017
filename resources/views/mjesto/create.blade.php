@extends('master')
@section('title', 'kreiraj novo mjesto')
@section('content')
<h1>Dodaj novo mjesto</h1>
   @if(Session::has('message'))
   <div>
     {{Session::get('message')}}   
   </div>
   @endif

    
    <div>
  {{ Form::open(array('url'=>'Mjesto')) }}
      <div>
    {{ Form::label('id','Šifra mjesta') }}
    <input readonly type="number" value="{{old('id')}}" name='id' class='form-control'>
  </div>
        <div>
    {{ Form::label('pbr','Poštanski broj') }}
    <input maxlength="5" type="number" value="{{old('pbr')}}" name='pbr' class='form-control'>
  </div>
    <div>
    {{ Form::label('naziv','Naziv mjesta') }}
    <input type="text" maxlength="40" value="{{old('naziv')}}" name='naziv' class='form-control'>
  </div>  
     <div>
    {{ Form::label('naziv','Šifra županije') }}
    <input type="number" maxlength="10" value="{{old('zupanija_id')}}" name='zupanja_id' class='form-control'>
  </div>   
  {{ Form::submit('Dodaj novo mjesto', array('class'=>'btn btn-primary', 'id'=>'mjesto-dodaj'))}}
</div>
@endsection