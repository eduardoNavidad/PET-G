    <div class="col-sm-6">
            <h1>Gestion de usuarios</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
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
                        <a href="<?php echo base_url();?>administrador/gestion_usuarios/agregar_usuario" class="btn btn-warning btn-flat"><span class="fa fa-plus-square"></span> Agregar Usuario</a>
                        
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
                                    <th>Clave</th>
                                    <th>Rol</th>
                                    <th>Nombre Completo</th>
                                    <th>Codigo</th>
                                    <th>Area</th>
                                    <th>opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($usuarios)):?>
                                    <?php foreach($usuarios as $usuario):?>
                                        <tr>
                                            <td><?php echo $usuario->id;?></td>
                                            <td><?php echo $usuario->nombre;?></td>
                                            <td > <input type="password" class="form-control" value="<?php echo $usuario->contraseña;?>" name="" disabled> </td>
                                            <td><?php echo $usuario->rol;?></td>
                                            <td><?php echo $usuario->nombre_completo;?></td>
                                            <td><?php echo $usuario->cod_empleado;?></td>
                                            <td><?php echo $usuario->area;?></td>
                                            <td>
                                                <div class="btn-group">
                                                    
                                                    <a href="<?php echo base_url()?>administrador/gestion_usuarios/editar_usuario/<?php echo $usuario->id;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>
                                                   
                                                    <a href="<?php echo base_url();?>administrador/gestion_usuarios/borrar_usuario/<?php echo $usuario->id;?>" class="btn btn-danger btn-remove"><span class="fas fa-trash-alt"></span></a>
                                                   
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


