       <div class="col-sm-6">
            <h1>Agregar Productos</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/productos'; ?>">Productos</a></li>
              <li class="breadcrumb-item active">Agregar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">           
            <div class="row">
                <div class="col-md-12">
                <!-- /.card -->
                <div class="card card-info">

                        <form action="<?php echo base_url();?>Administrador/proveedores/guardar" method="POST">

                         <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Empresa</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Razon Social</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Direccion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="telefono" name="telefono" required>
                                </div>
                            </div>
                            
                
                    </div>
                    
                    <div class="card-footer">

                           <button type="submit" class="btn btn-warning btn-flat">Guardar</button> 
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'Administrador/proveedores'; ?>">Cancelar</a></button>
                    </div>
                                
                </form>
                    </div>
                <!-- /.card -->    
                </div>
            </div>
        
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->


                        