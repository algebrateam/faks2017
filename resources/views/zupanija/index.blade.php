<a href="{{ url('/') }}">Home</a>

<br>

@foreach ($z as $zupanija)
<p> <strong>{{ $zupanija->naziv }}</strong>
    <a href="/Zupanija/{{ $zupanija->id }}">detalji</a> 
    <a href="/Zupanija/{{ $zupanija->id }}/edit">uredi</a>
<form method="POST" action="/Zupanija/{{ $zupanija->id }}"> 
    <input type="hidden" name="_method" value="DELETE">
    {{ csrf_field() }}
    <input style="display: inline" type="submit" value="obrisi" id='zupanija-del-{{$zupanija->id}}'>
</form>
</p>
@endforeach

<hr>
<?php
echo "Ja sam nova stranica iz blade.php templatea";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

