@extends('../sesion')

@section('contenidorrhh')
    <div>
        <form action=" {{ Route('ciudades.store') }} " method="POST">
            @csrf
            <div>
                <select name="iddpto" id="iddpto">
                    {{-- Ciclo para obtener las ciudades almacenados en la variable 
                        $ciudades --}}
                    @foreach ($departamentos as $undepa)
                        <option value=" {{$undepa->iddepartamento}} "> {{$undepa->nombre}} </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <label for="">Nombre Ciudad: 
                    <input type="text" name="nombreciudad" id="">
                </label>
            </div>
                <button>Guardar</button>
        </form>
    </div>
@endsection