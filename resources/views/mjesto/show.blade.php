@extends('master')
@section('title', 'Mjesto detalji')
@section('content')

<h1>{{ $mjesto->naziv }}</h1>

Datum kreiranja <strong>{{ $mjesto->created_at }}</strong><br>
Šifra mjesta <strong>{{ $mjesto->id }}</strong><br>

<?php 
$z = DB::table('zupanijas')->find($mjesto->zupanija_id);
?>
<br>
<!-- Ovo je ručno izrudareno  -->
<i>Ovo je ručno izrudareno</i><br>
Ovo mjesto pripada  <strong> {{ $z->naziv }} </strong> županiji.
<br>
<br>
<i>Ovo je ispravan nacin</i><br>
<!-- Ovo je ispravan nacin  -->
Ovo mjesto pripada  <strong> {{ $mjesto->zupanija->naziv }} </strong> županiji.



<br>
<hr>
@endsection

