@extends('master')
@section('title', 'kreiraj novu zupaniju')
@section('content')

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

    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>Poštanski broj</th>
                    <th>Naziv</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($m as $mjesto)
                <tr>
                    <td>{{$mjesto->pbr}}</td>
                    <td>{{$mjesto->naziv}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
    @endsection

