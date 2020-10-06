@extends('plantilla')

@section('seccion')
<body>
  <h1>Registro Producto</h1>
  <p>Registrar un producto con los siguientes datos, id auto incrementable, código
único del producto, nombre del producto, categoría, sucursal en la que se
encuentra (Suponga 3), y descripción, cantidad, y precio venta.</p>
</body>

<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-header">
              <h3 class="card-title">Detalles del producto</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-10">

          <form class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
            <legend>Formulario de Ingreso del Producto</legend>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="id">ID:</label>  
              <div class="col-md-4">
              <input id="id" name="id" type="text" placeholder="id auto incrementable" class="form-control input-md" required="">
              <span class="help-block">Id auto incrementable</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="textinput">CODIGO:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Código único del producto" class="form-control input-md" required="">
              <span class="help-block">Código único del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="textinput">NOMBRE:</label>  
              <div class="col-md-4">
              <input id="textinput" name="textinput" type="text" placeholder="Nombre del producto" class="form-control input-md" required="">
              <span class="help-block">Nombre del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="categoria">CATEGORIA:</label>  
              <div class="col-md-4">
              <input id="categoria" name="categoria" type="text" placeholder="Categoria del producto" class="form-control input-md" required="">
              <span class="help-block">Categoria del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="sucursal">SUCURSAL:</label>  
              <div class="col-md-4">
              <input id="sucursal" name="sucursal" type="text" placeholder="Sucursal de producto" class="form-control input-md">
              <span class="help-block">Sucursal en la que se encuentra del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="descripcion">DESCRIPCION:</label>  
              <div class="col-md-4">
              <input id="descripcion" name="descripcion" type="text" placeholder="Descripcion del producto" class="form-control input-md">
              <span class="help-block">Descripcion del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="cantidad">CANTIDAD:</label>  
              <div class="col-md-4">
              <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad del producto" class="form-control input-md">
              <span class="help-block">Cantidad del producto</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-4 control-label" for="precio">PRECIO:</label>  
              <div class="col-md-4">
              <input id="precio" name="precio" type="text" placeholder="Precio de venta" class="form-control input-md">
              <span class="help-block">Precio de venta</span>  
              </div>
            </div>

            <div class="form-group row justify-content-center h-100">
                <div class="col-sm-10 align-self-center text-center">
                    <button type="submit" class="btn btn-success">Agregar</button>
                    <a href="{{ route('search') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>

            </fieldset>
            </form>

          </div>
          <!-- /.card-body -->
      </div>
      <!-- /.card -->
  </div>
</div>
@endsection