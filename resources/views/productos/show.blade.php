@extends ("../layout.template")


@section("cabecera")
  <h1> mostrar productos </h1>

@endsection

@section("contenido")

<h1>{{$producto->NombreArticulo}}</h1>
<h3>{{$producto->Precio}}</h3>
<h3>{{$producto->PaisOrigen}}</h3>




@endsection



@section("footer")

@endsection
