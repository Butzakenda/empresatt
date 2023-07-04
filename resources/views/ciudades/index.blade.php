@extends('../sesion')

@section('contenidorrhh')
    <a href=" {{Route('ciudades.create')}} ">
        <button>Crear</button>
    </a>
    <div>
        <table>
            <tr>
                <td>Còdigo</td>
                <td>Ciudad</td>
                <td>Departamento</td>
                <td>Acciones</td>
            </tr>
            
                
            @forelse($ciudades as $filaCiudad)
            <tr>
                <td> {{ $filaCiudad->idciudad }} </td>
                <td> {{ $filaCiudad->nombre }} </td>
                <td> {{ $filaCiudad->dep  }} </td>
                <td>
                    <a href=" {{Route('ciudades.edit',$filaCiudad->idciudad)}} ">
                        <button>Editar</button>
                    </a>                    
                </td>
                <td>
                    <a href=" {{Route('ciudades.destroy',$filaCiudad->idciudad)}} " onclick="return confirm('¿Esta seguro de que desea eliminar la ciudad?')" >
                        <button>Eliminar</button>
                    </a>
                </td>
            </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection