@extends('master')
@section('title', 'kreiraj novo mjesto')
@section('content')
<h1>Dodaj novo mjesto</h1>



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

    <div>
        {{ Form::label('naziv','Naziv mjesta') }} <br>

        <input type="text" maxlength="40" value="{{old('naziv')}}" name='naziv' class='form-control'>

    </div>
    <div>


    </div>  
    <div>
        {{ Form::label('zupanija_id','Šifra županije') }} 
        <!--
        <input type="number" maxlength="10" value="{{old('zupanija_id')}}" name='zupanija_id' class='form-control'>  -->
        
<select name='zupanija_id' class='form-control'>
  @if(old('zupanija_id')!='') 
  <option value="{{old('zupanija_id')}}">{{$zupanija[old('zupanija_id')-1]->naziv}}</option>
  @endif
  @foreach ($zupanija as $z)
  <option value="{{$z->id}}">{{$z->naziv}}</option>
  @endforeach
</select>
    </div> 
    <button type="submit" class="btn btn-default" id='mjesto-dodaj'>
        Dodaj novo mjesto &nbsp;&nbsp; <i class="fa fa-arrow-right" style="font-size:30px;color:#333333;"></i> 
    </button>


</div>
<?php
//dd(get_defined_vars());
?>
@endsection