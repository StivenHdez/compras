@extends('compra.layout')


@section('content')
<div class="container col-md-4" >
  <div align="center">
  <h3>Crear Producto</h3>
  </div>


<form action="{{ route('compras.store') }}" method="POST">

@csrf

<label>Nombre producto</label>
<input type="text" name="nombre" class="form-control">
<br>
<label>Descripción</label>
<input type="text" name="descripcion" class="form-control">
<br>
<label>Categoría</label>
<input type="text" name="categoria" class="form-control">
<br>
<label>Precio</label>
<input type="text" name="precio" class="form-control">
<br>

<div align="center">
 <button type="submit" class="btn btn-success">Guardar</button> 
</div>
</form>

</div>
<h3></h3>

@endsection