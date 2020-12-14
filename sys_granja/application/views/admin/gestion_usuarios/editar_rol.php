       <div class="col-sm-6">
            <h1>Agregar usuarios</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'administrador/categorias'; ?>">Usuarios</a></li>
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
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>administrador/gestion_usuarios/modificar_rol" method="POST">
                    <input type="hidden" name="idrol" value="<?php echo $rol->id;?>">
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="45" value="<?php echo $rol->nombre;?>"required>
                                </div>
                            </div>

                
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-flat">Guardar</button> 
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'Administrador/gestion_usuarios/roles'; ?>">Cancelar</a></button>
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


                        