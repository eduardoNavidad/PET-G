    <div class="col-sm-6">
            <h1>Unidad Transporte</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Unidad Transporte</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>Administrador/unidad_transporte/agregar" class="btn btn-warning btn-flat"><span class="fa fa-plus-square"></span> Agregar Unidad transporte</a>
                        
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
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Modelo</th>
                                    <th>Placa</th>
                                    <th>Estado</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($unidad_transportes)):?>
                                    <?php foreach($unidad_transportes as $ut):?>
                                        <tr>
                                            <td><?php echo $ut->id;?></td>
                                            <td><?php echo $ut->Nombre;?></td>
                                            <td><?php echo $ut->Modelo;?></td>
                                            <td><?php echo $ut->Placa;?></td>
                                              <td>
                                            <?php if ($ut->estado==1) {
                                                  echo "<i class='fas fa-check-circle text-success'> Activo </i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'> Innactivo</i>";
                                              }?>
                                            </td>                                        
                                           
                                           
                                            <td>
                                                <div class="btn-group">
                                                    
                                                    <a href="<?php echo base_url()?>administrador/unidad_transporte/editar/<?php echo $ut->id;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>

                                                     <a href="<?php echo base_url();?>administrador/unidad_transporte/borrar/<?php echo $ut->id;?>" class="btn btn-danger btn-remove"><span class="fas fa-trash-alt"></span></a>
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