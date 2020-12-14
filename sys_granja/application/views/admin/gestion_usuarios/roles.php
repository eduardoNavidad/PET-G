    <div class="col-sm-6">
            <h1>Gestion de roles</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Roles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

       <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>administrador/gestion_usuarios/agregar_rol" class="btn btn-warning btn-flat"><span class="fa fa-plus-square"></span> Agregar Rol</a>
                        
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                         <?php if($this->session->flashdata("ok")):?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-check"></i><?php echo $this->session->flashdata("ok"); ?></p>

                             </div>
                        <?php endif;?>
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Nombre</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($roles)):?>
                                    <?php foreach($roles as $rol):?>
                                        <tr>
                                            <td><?php echo $rol->id;?></td>
                                            <td><?php echo $rol->nombre;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    
                                                    <a href="<?php echo base_url()?>administrador/gestion_usuarios/editar_rol/<?php echo $rol->id;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>
                                                   
                                                    <a href="<?php echo base_url();?>administrador/gestion_usuarios/borrar_rol/<?php echo $rol->id;?>" class="btn btn-danger btn-remove"><span class="fas fa-trash-alt"></span></a>
                                                   
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                <?php endif;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>


