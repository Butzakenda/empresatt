@extends('../sesion')

@section('contenidorrhh')
    <div>
        <form action=" {{ Route('departamentos.store') }} " method="POST">
            @csrf
            <div>
                <label for="">Nombre
                    <input type="text" name="nombredepartamento" id="">
                </label>
            </div>
                <button>Guardar</button>
        </form>
    </div>
@endsection