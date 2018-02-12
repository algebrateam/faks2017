@extends('master')
@section('title', 'kreiraj novo mjesto')
@section('content')
<h1>Dodaj novo mjesto</h1>

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger text-center msg">
        <ul>
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
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
    <input maxlength="5"  data-error="Molim unesite 5 brojeva" type="number" value="{{old('pbr')}}" name='pbr' class='form-control'>
@if ($errors->has('pbr'))
    <span style="color:red">{{ $errors->first('pbr') }}</span>
@endif
  </div>
  <div class="input-group">
  <span class="input-group-addon">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
  <span class="input-group-addon">.00</span>
</div>
    <div>
    {{ Form::label('naziv','Naziv mjesta') }}
    <input type="text" maxlength="40" value="{{old('naziv')}}" name='naziv' class='form-control'>
  </div>  
     <div>
    {{ Form::label('zupanija_id','Šifra županije') }}
    <input type="number" maxlength="10" value="{{old('zupanija_id')}}" name='zupanija_id' class='form-control'>
  </div> 
<button type="submit" class="btn btn-default" id='mjesto-dodaj'>
  Dodaj novo mjesto <span class="glyphicon glyphicon-credit-card"></span> 
</button>


</div>
<?php
//dd(get_defined_vars());
?>
@endsection