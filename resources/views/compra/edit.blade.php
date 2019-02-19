@extends('compra.layout')


@section('content')
<div class="container col-md-4" >
  <div align="center">
  <h3>Editar Producto</h3>
  </div>


<form action="{{ route('compras.update', $producto->id) }}" method="POST">
@csrf
@method('PUT')
<label>Nombre producto</label>
<input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}">
<br>
<label>Descripción</label>
<input type="text" name="descripcion" class="form-control" value="{{ $producto->descripcion }}">
<br>
<label>Categoría</label>
<input type="text" name="categoria" class="form-control" value="{{ $producto->categoria }}">
<br>
<label>Precio</label>
<input type="text" name="precio" class="form-control" value="{{ $producto->precio }}">
<br>
<label>Estado</label>

@if($producto->estado==1)
<select class="form-control" name="estado">
	<option value="1">Habilitado</option>
	<option value="0">Inhabilitado</option>
</select>
@else()
<select class="form-control" name="estado">
	<option value="0">Inhabilitado</option>
	<option value="1">Habilitado</option>
</select>	
@endif
{{-- <input type="hidden" name="estado" class="form-control" value="{{ $producto->estado}}"> --}}
<br>

<div align="center">
 <button type="submit" class="btn btn-success">Guardar</button> 
</div>
</form>

</div>
<h3></h3>

@endsection