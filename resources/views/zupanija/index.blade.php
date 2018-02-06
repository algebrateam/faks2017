<a href="{{ url('/') }}">Home</a>

<br>

@foreach ($z as $zupanija)
<p> <strong>{{ $zupanija->naziv }}</strong><a href="/Zupanija/{{ $zupanija->id }}">link</a></p>
@endforeach

<hr>
<?php
echo "Ja sam nova stranica iz blade.php templatea";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

