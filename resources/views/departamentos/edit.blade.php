@extends('../sesion')

@section('contenidorrhh')
    <div>
        <form action=" {{Route('departamentos.update',$departamentos->iddepartamento)}} " method="put">
            @csrf
            <div>
                <label for="">Nombre
                    <input type="text" name="nombredepartamento" id="" value=" {{$departamentos -> nombre}} ">
                </label>
            </div>
                <button>Actualizar</button>
        </form>
    </div>
@endsection