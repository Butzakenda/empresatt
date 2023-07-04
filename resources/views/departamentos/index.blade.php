@extends('../sesion')

@section('contenidorrhh')
    <a href=" {{route('departamentos.create')}} ">
        <button>Crear</button>
    </a>
    <div>
        <table>
            <tr>
                <td>Còdigo</td>
                <td>Nombre</td>
                <td>Acciones</td>
            </tr>
            @forelse($departamentos as $fila)
                <tr>
                    <td> {{ $fila->iddepartamento }} </td>
                    <td> {{ $fila->nombre }} </td>
                    <td>
                        <a href=" {{Route('departamentos.edit',$fila->iddepartamento)}} ">
                            <button>Editar</button>
                        </a>                    
                    </td>
                    <td>
                        <a href="{{Route('departamentos.destroy',$fila->iddepartamento)}} " onclick="return confirm('¿Esta seguro de que desea eliminar el departamento?')">
                            <button>Eliminar</button>
                        </a>
                    </td>
                </tr>
                @empty
            @endforelse
        </table>
    </div>
@endsection