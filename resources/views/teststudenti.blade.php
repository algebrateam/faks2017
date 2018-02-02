<a href="{{ url('/') }}">Home</a>

<br>
<h1>Lista studenata</h1>
@foreach ($studenti as $s)
<p> <strong>{{ $s->imeStud }} {{ $s->prezStud }}</strong> , {{ $s->mbrStud }}</p>
@endforeach

<hr>
<?php
echo "Ja sam nova stranica iz blade.php templatea";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

