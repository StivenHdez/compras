@extends('compra.layout')


@section('content')
<br>

<div class="container">
	
<div align="center"><h2>Detalle</h2> 
<h5>{{ $producto->nombre }}</h5>
</div>
<br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Categoria</th>
      <th scope="col">precio</th>
      <th scope="col">Estado</th>
      <th colspan="3">Acciones</th>
    </tr>
  </thead>
  <tbody>
    {{-- @foreach($producto) --}}
    <tr data-id="{{ $producto->id }}" class="result">
      <th scope="row">{{ $producto->id }}</th>
      <td>{{ $producto->nombre }}</td>
      <td>{{ $producto->descripcion }}</td>
      <td>{{ $producto->categoria }}</td>
      <td>{{ $producto->precio }}</td>
      <td>         
        @if ($producto->estado == '1')
        <p style="color: #21BF08">Habilitado</p>
        @elseif($producto->estado == '0')
        <p style="color: red">Inhabilitado</p>
        @endif 
      
      </td>
      <td><a href="{{ route('compras.edit', $producto->id) }}" class="btn btn-success">Editar</a></td>
      </a></td>
      <td>
        <form  id="modificarEstado" action="{{route('compras.update', $producto->id) }}" method="POST">
        @csrf
        @method('PUT')


        @if ($producto->estado == '1')
          <input type="hidden" name="nombre" class="form-control" value="{{ $producto->nombre }}">
          <input type="hidden" name="descripcion" class="form-control" value="{{ $producto->descripcion }}">
          <input type="hidden" name="categoria" class="form-control" value="{{ $producto->categoria }}">
          <input type="hidden" name="precio" class="form-control" value="{{ $producto->precio }}">
          <input type="hidden" name="action" class="form-control" value="modificarEstado">
          <input type="hidden" name="estado" value="0">
           <input type="hidden" name="vista" value="show">
          <button class="btn btn-danger inhabilitar">Inhabilitar</button></td>
        @elseif($producto->estado == '0')
            <input type="hidden" name="nombre" class="form-control" value="{{ $producto->nombre }}">
            <input type="hidden" name="descripcion" class="form-control" value="{{ $producto->descripcion }}">
            <input type="hidden" name="categoria" class="form-control" value="{{ $producto->categoria }}">
            <input type="hidden" name="precio" class="form-control" value="{{ $producto->precio }}">
            <input type="hidden" name="action" class="form-control" value="modificarEstado">
            <input type="hidden" name="estado" value="1">
            <input type="hidden" name="vista" value="show"> 
            <button class="btn btn-success habilitar">Habilitar</button>
        @endif   
        </form>
          </td>
            
      <td>
        <form  action="{{ route('compras.destroy', $producto->id) }}" method="POST" >
          @csrf
          @method('PUT')
          @method('DELETE')
        <button  type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        </td>
    </tr>
    {{-- @endforeach	 --}}
  </tbody>
</table>
</div>

@endsection

@section('script')

<script >

</script>

@endsection