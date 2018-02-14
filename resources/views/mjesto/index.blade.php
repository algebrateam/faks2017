@extends('master')
@section('title', 'Lista svih mjesta')
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
@foreach ($mjesto as $m)

<tr>
    <td>{{ $m->id }}</td>
    <td>{{ $m->naziv }}</td>
    <td><a href="/Mjesto/{{ $m->id }}">detalji</a></td>
    <td><a href="/Mjesto/{{ $m->id }}/edit">uredi</a></td>
    <td>
        <form method="POST" action="/Mjesto/{{ $m->id }}"> 
            <input type="hidden" name="_method" value="DELETE">
            {{ csrf_field() }}
<input style="display: inline" type="submit" value="obrisi" id='mjesto-del-{{$m->id}}'>
        </form>
    </td>
</tr>

            @endforeach
        </tbody>
    </table>
</div>
@endsection
