@extends('welcome')
@section('contenido')
    <h1>Hola desde edit</h1>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-10 mx-auto">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Actualizacion de Producto</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('producto.update', $productos->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Nombre del Producto</label>
                                    <input type="text" class="form-control"  placeholder="Nombre del Producto" name="nombreP" value="{{$productos->nombreP}}">
                                </div>
                                <div class="form-group">
                                    <label >Descripcion del Producto</label>
                                    <input type="text" class="form-control"  placeholder="Descripcion del Producto" name="descripcionP" value="{{$productos->descripcionP}}">
                                </div>
                                <div class="form-group">
                                    <label >Codigo del Producto</label>
                                    <input type="text" class="form-control"  placeholder="Codigo del Producto" name="codigoP" value="{{$productos->codigoP}}">
                                </div>
                                <div class="form-group">
                                    <label >Precio del Producto</label>
                                    <input type="number" class="form-control"  placeholder="Precio del Producto" name="precioP" value="{{$productos->precioP}}">
                                </div>
                                <div>
                                    <button class="btn btn-primary">Actualizar</button>
                                </div>
                            </div>
                    </div>
                </div>
    </section>
@endsection
