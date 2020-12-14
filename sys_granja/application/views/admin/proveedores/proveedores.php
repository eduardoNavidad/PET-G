    <div class="col-sm-6">
            <h1>Proveedores</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Proveedores</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>administrador/proveedores/agregar" class="btn btn-warning btn-flat"><span class="fa fa-plus-square"></span> Agregar Proveedores</a>
                        
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

                        <table id="example1" class="table table-bordered table-hove">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Empresa</th>
                                    <th>NIT</th>
                                    <th>RazonSocial</th>
                                    <th>direccion</th>
                                    <th>email</th>
                                    <th>telefono</th>
                                    
                                 
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($proveedores)):?>
                                    <?php foreach($proveedores as $proveedor):?>
                                        <tr>
                                            <td><?php echo $proveedor->id;?></td>
                                            <td><?php echo $proveedor->nombreEmpresa;?></td>
                                            <td><?php echo $proveedor->NIT;?></td>
                                            <td><?php echo $proveedor->RazonSocial;?></td>
                                            <td><?php echo $proveedor->direccion;?></td>
                                            <td><?php echo $proveedor->email;?></td>
                                            <td><?php echo $proveedor->telefono;?></td>
                                            <?php $dataproveedor = $proveedor->id."*".$proveedor->nombreEmpresa."*".$proveedor->NIT."*".$proveedor->RazonSocial."*".$proveedor->direccion."*".$proveedor->email."*".$proveedor->telefono;?>
                                            <td>
                                                <div class="btn-group">
                                                    
                                                    <a href="<?php echo base_url()?>administrador/proveedores/editar/<?php echo $proveedor->id;?>" class="btn btn-primary"><span class="fa fa-pencil"></span></a>
                                                

                                                    <a href="<?php echo base_url();?>administrador/proveedores/borrar/<?php echo $producto->id;?>" class="btn btn-danger btn-remove"><span class="fas fa-trash-alt"></span></a>

                                                    
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
    <!-- /.content -->