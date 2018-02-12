@extends('master')
@section('title', 'Lista županija')
@section('content')

<a href="{{ url('/') }}">Home</a>

<br>

<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th>Id</th>
                <th>Naziv</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
@foreach ($z as $zupanija)

<tr>
    <td>{{ $zupanija->id }}</td>
    <td>{{ $zupanija->naziv }}</td>
    <td><a href="/Zupanija/{{ $zupanija->id }}">detalji</a></td>
    <td><a href="/Zupanija/{{ $zupanija->id }}/edit">uredi</a></td>
    <td>
        <form method="POST" action="/Zupanija/{{ $zupanija->id }}"> 
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
<input style="display: inline" type="submit" value="obrisi" id='zupanija-del-{{$zupanija->id}}'>
        </form>
    </td>
</tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
