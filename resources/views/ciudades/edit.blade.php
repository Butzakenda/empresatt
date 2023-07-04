@extends('../sesion')

@section('contenidorrhh')
    <div>
        <form action=" {{Route('ciudades.update',$ciudades->idciudad)}}" method="put">
            @csrf
            <div>
                <select name="iddpto" id="">
                    @foreach ($departamentos as $undepa)
                        @if($ciudades->iddepartamento==$undepa->iddepartamento)
                            <option value="{{ $undepa->iddepartamento }}" selected> {{ $undepa->nombre}} </option>
                        @else
                            <option value="{{ $undepa->iddepartamento }}"> {{ $undepa->nombre}} </option>
                        @endif    
                    @endforeach
                </select>
            </div>
            <div>
                <label for="">Nombre
                    <input type="text" name="nombreciudad" id="" value=" {{$ciudades -> nombre}} ">
                </label>
            </div>
                <button>Actualizar</button>
        </form>
    </div>
@endsection