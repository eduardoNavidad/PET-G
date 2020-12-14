    <div class="col-sm-6">
     
          <h1 >Ruta: <small class="text-warning"><?php echo $ruta->nombre;?></small></h1>
       
            
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Rutas</li>
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
                                    <th>Nombre del cliente</th>
                                    <th>Ruta asignada</th>
                                    <th>Motorista</th>
                                    <th>U. Transporte</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($detalles)):?>
                                    <?php foreach($detalles as $ruta):?>
                                        <tr>
                                            <td><?php echo $ruta->id;?></td>
                                            <td><?php echo $ruta->cliente;?></td>
                                            <td><?php echo $ruta->ruta;?></td>
                                            <td><?php echo $ruta->motorista;?></td>
                                            <td><?php echo $ruta->unidad_transporte;?></td>
                                           
                                            <td>
                                                <div class="btn-group">

                                                     <a href="<?php echo base_url();?>rutas/rutas/borrar/<?php echo $ruta->id;?>" class="btn btn-danger btn-remove"><span class="fas fa-trash-alt"></span></a>

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