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
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>administrador/gestion_usuarios/modificar_usuario" method="POST">
                    <input type="hidden" name="idusuario" value="<?php echo $usuario->id;?>">
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre Usuario</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="45" value="<?php echo $usuario->nombre;?>"required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">contraseña</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="contraseña" name="contraseña" maxlength="45" required value="<?php echo $usuario->contraseña;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre completo</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" maxlength="45" required value="<?php echo $usuario->nombre_completo;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Codigo empleado</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="cod_empleado" name="cod_empleado" maxlength="45" required value="<?php echo $usuario->cod_empleado;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Area</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="area" name="area" maxlength="45" required value="<?php echo $usuario->area;?>">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Rol</label>
                                <div class="col-sm-10">
                                  <select name="rol" id="rol" class="form-control" required value="<?php echo $usuario->rol;?>">
                                    <?php foreach($roles as $rol):?>
                                        <option value="<?php echo $rol->id?>"><?php echo $rol->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-flat">Guardar</button> 
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'Administrador/gestion_usuarios'; ?>">Cancelar</a></button>
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


                        