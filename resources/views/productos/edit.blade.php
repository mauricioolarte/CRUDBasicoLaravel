@extends ("../layout.template")


@section("cabecera")
  <h1> Editar registros </h1>

@endsection

@section("contenido")


<form action="/productos/{{$producto->id}}" method="post">
    @csrf
 <ul>
  <li>
    <label for="name">Nombre Ariculo:</label>
    <input type="text" id="name" name="NombreArticulo" value="{{$producto->NombreArticulo}}">
    <input type="hidden" name="_method" value="PUT">
  </li>
  <li>
    <label for="name">Seccion articulo:</label>
    <input type="text" id="seccion" name="Seccion" value="{{$producto->Seccion}}">
  </li>
  <li>
    <label for="name">Precio:</label>
    <input type="text" id="precio" name="Precio" value="{{$producto->Precio}}">
  </li>
  <li>
    <label for="name">Fecha:</label>
    <input type="text" id="fecha" name="Fecha" value="{{$producto->Fecha}}">
  </li>
  <li>
    <label for="name">Pais de origen:</label>
    <input type="text" id="pais_origen" name="PaisOrigen" value="{{$producto->PaisOrigen}}"> 
  </li>
  
  <li>
      <input type="submit" name="enviar" value="enviar">
      <input type="reset" name="Limpiar" value="limpiar">
  </li>

 </ul>
</form>
<form action="/productos/{{$producto->id}}" method="post">

  <!-- <input type="hidden" name="_method" value="DELETE"> -->

  <input type="submit" name="enviar" value="Eliminar Registro">
  @method('delete')
  @csrf
</form>


 @endsection



@section("footer")

@endsection
