@extends ("../layout.template")


@section("cabecera")
  <h1> insertar registros </h1>

@endsection

@section("contenido")


<form action="/productos" method="post">
    @csrf
 <ul>
  <li>
    <label for="name">Nombre Ariculo:</label>
    <input type="text" id="name" name="NombreArticulo">
  </li>
  <li>
    <label for="name">Seccion articulo:</label>
    <input type="text" id="seccion" name="Seccion">
  </li>
  <li>
    <label for="name">Precio:</label>
    <input type="text" id="precio" name="Precio">
  </li>
  <li>
    <label for="name">Fecha:</label>
    <input type="text" id="fecha" name="Fecha">
  </li>
  <li>
    <label for="name">Pais de origen:</label>
    <input type="text" id="pais_origen" name="PaisOrigen">
  </li>
  
  <li>
      <input type="submit" name="enviar" value="enviar">
      <input type="reset" name="borrar" value="borrar">

  </li>

 </ul>

 @endsection



@section("footer")

@endsection
