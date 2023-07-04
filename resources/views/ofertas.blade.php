@extends('index')

@section('contenido')
    <h1>Listado de las Ofertas</h1>

    @forelse ($programas as $item)
        <p> {{$item['nombre']}} </p>
    @empty
        <p>Sin oferta</p>
    @endforelse
    
@endsection
