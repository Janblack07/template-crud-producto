@extends('welcome')
@section('contenido')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Todos los Productos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body ">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>id</th>
              <th>Producto</th>
              <th>Descripcion</th>
              <th>codigo</th>
              <th class="text-center">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($productos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nombreP}}</td>
                    <td>{{$item->descripcionP}}</td>
                    <td>{{$item->codigoP}}</td>
                     <td class="d-flex justify-content-center">
                        <a href="{{route('producto.edit',$item->id)}}" class="btn btn-primary ">Edit</a>
                        <form action="{{route('producto.delete',$item->id)}}" method="POST" >
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger mx-2 ">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                    <td>no existen datos</td>
                </tr>
                @endforelse
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
</div>
@endsection
