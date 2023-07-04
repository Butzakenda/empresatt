@extends('index')

@section('contenido')
    <h1>Listado de la saga</h1>

    @forelse ($darksouls as $NombreJuego)
        <p> {{$NombreJuego['Nombre']}} </p>
    @empty
        <p>No encontrado</p>
    @endforelse
@endsection