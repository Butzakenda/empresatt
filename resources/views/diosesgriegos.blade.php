@extends('index')

@section('contenido')
    <h1>Listado de dioses</h1>
    @forelse ($diosesgriegos as $dioses)
        <p> {{$dioses['Nombre']}} </p>
    @empty
        <p>No encontrado</p>
    @endforelse

@endsection