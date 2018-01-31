<a href="{{ url('/') }}">Home</a>

<br>

@foreach ($korisnici as $k)
<p>This is user <strong>{{ $k->name }}</strong></p>
@endforeach

<hr>
<?php
echo "Ja sam nova stranica iz blade.php templatea";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

