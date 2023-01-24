@extends('welcome')
@section('contenido')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-10 mx-auto">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Registro de Producto</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('producto.store')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="card-body">
                            <div class="form-group">
                                <label >Nombre del Producto</label>
                                <input type="text" class="form-control"  placeholder="Nombre del Producto" name="nombreP">
                            </div>
                            <div class="form-group">
                                <label >Descripcion del Producto</label>
                                <input type="text" class="form-control"  placeholder="Descripcion del Producto" name="descripcionP">
                            </div>
                            <div class="form-group">
                                <label >Codigo del Producto</label>
                                <input type="text" class="form-control"  placeholder="Codigo del Producto" name="codigoP">
                            </div>
                            <div >
                               <button class="btn btn-primary">Registrar</button>
                            </div>
                        </div>
                        <!-- /.card-body -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>

@endsection
