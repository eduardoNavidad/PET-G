       <div class="col-sm-6">
            <h1>Editar motoristas</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/motoristas'; ?>">motoristas</a></li>
              <li class="breadcrumb-item active">Editar</li>
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
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>Administrador/motoristas/modificar" method="POST">
                    <input type="hidden" name="idmotorista" value="<?php echo $motorista->id;?>">
                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" value="<?php echo $motorista->nombre;?>" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">DUI</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="dui" name="dui" placeholder="00000000-0" value="<?php echo $motorista->dui;?>" maxlength="10" data-inputmask="'alias': '00000000-0'" data-mask >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Licencia</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="licencia" name="licencia" value="<?php echo $motorista->licencia;?>" placeholder="0000-000000-000-0" data-inputmask="'alias': '0000-000000-000-0'"maxlength="17" required>
                                </div>
                            </div>

                            
                
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-flat">Guardar</button> 
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'Administrador/motoristas'; ?>">Cancelar</a></button>
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


                        