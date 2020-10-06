@extends('plantilla')

@section('seccion')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Consultar Productos</h1>
                        <p>Permite consultar productos por código, nombre, y opcionalmente la sucursal.</p>                        
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card"> 
                            <div class="card-header">

                                <div class="input-group-append">
                                    <div class="col-sm-4">
                                        <div class="input-group-prepend">
                                          <div class="input-group-text">
                                            <input type="checkbox">Codigo</input>
                                            &nbsp;
                                            <input type="checkbox">Nombre</input>
                                            &nbsp;
                                            <input type="checkbox">Sucursal</input>
                                            &nbsp;
                                          </div>
                                        </div>
                                    </div>
                                    <input type="text" name="table_search" class="form-control float-right"
                                        placeholder="Buscar">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Codigo</th>
                                            <th>Nombre</th>
                                            <th>Categoria</th>
                                            <th>Sucursal</th>
                                            <th>Descripcion</th>
                                            <th>Cantidad</th>
                                            <th>Precio</th>
                                            <th>Estado</th>
                                            <th>Actualizar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>COD01</td>
                                            <td>Nombre Producto</td>
                                            <td>Categoria Producto</td>
                                            <td>Primera Sucursal</td>
                                            <td>Descripcion</td>
                                            <td>99</td>
                                            <td>$5.000</td>
                                            <td>Activo</td>
                                            <td>
                                                <a class="btn btn-success" href="{{ route('update') }}">editar</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection