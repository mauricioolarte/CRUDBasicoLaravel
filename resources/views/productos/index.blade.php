@extends ("../layout.template")


@section("cabecera")
  <h1> leer registros </h1>

@endsection

@section("contenido")
<ul>
  @foreach($productos as $producto)
    <li>
      <a href="{{route('productos.edit', $producto->id)}}">{{$producto->NombreArticulo}}</a> &nbsp; {{$producto->Precio}} &nbsp; {{$producto->PaisOrigen}}
    </li>
  @endforeach
</ul>



@endsection



@section("footer")

@endsection
