<h1>{{ $z->naziv }}</h1>

Datum kreiranja <strong>{{ $z->created_at }}</strong><br>
Šifra županije <strong>{{ $z->id }}</strong><br>

<br>
<hr>
<h3>U ovoj županiji su sljedeća mjesta</h3>
<ol>
    @if (count($m) === 0)
    <span style="color:red">U ovoj županiji ne postoje mjesta ili je nepoznata županija</span>
    @else

    @foreach ($m as $mjesto)

    <li>{{$mjesto->naziv}}</li>

    @endforeach

    @endif
<?php
//dd($z);
//print_r($z);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

