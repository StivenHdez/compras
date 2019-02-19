@extends('compra.layout')


@section('content')
<br>

<div class="container">
	
<div align="center"><h3>Listado de productos</h3></div>
<br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      {{-- <th scope="col">Descripcion</th> --}}
      <th scope="col">Categoria</th>
      <th scope="col">precio</th>
      <th colspan="3">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($productos AS $producto)
    <tr>
      <th scope="row">{{ $producto->id }}</th>
      <td>{{ $producto->nombre }}</td>
      {{-- <td>{{ $producto->descripcion }}</td> --}}
      <td>{{ $producto->categoria }}</td>
      <td>{{ $producto->precio }}</td>
      <td><a href="" class="btn btn-success">Comprar</a></td>
      <td><a href="{{ route('compras.show', $producto->id) }}" class="btn btn-warning" >Detalle</a></td>
    </tr>
    @endforeach	
  </tbody>
</table>
</div>




@endsection