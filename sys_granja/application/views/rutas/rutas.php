    <div class="col-sm-6">
            <h1>Rutas</h1>
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
                    <div class="col-md-12">
                        <a href="<?php echo base_url();?>rutas/rutas/agregar" class="btn btn-warning btn-flat"><span class="fa fa-plus-square"></span> Agregar Ruta</a>
                        
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
                                    <th>Lun</th>
                                    <th>Mar</th>
                                    <th>Mie</th>
                                    <th>Jue</th>
                                    <th>Vie</th>
                                    <th>sab</th>
                                    <th>dom</th>
                                    <th>Dep.</th>
                                    <th>Mun.</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($rutas)):?>
                                    <?php foreach($rutas as $ruta):?>
                                        <tr>
                                            <td><?php echo $ruta->id;?></td>
                                            <td><?php echo $ruta->nombre;?></td>
                                            <td>
                                            <?php if ($ruta->lunes==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td>
                                            <td>
                                            <?php if ($ruta->martes==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td>
                                            <td>
                                            <?php if ($ruta->miercoles==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td>
                                            <td>
                                            <?php if ($ruta->jueves==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td>
                                            <td>
                                            <?php if ($ruta->viernes==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td>
                                            <td>
                                            <?php if ($ruta->sabado==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td> 
                                            <td>
                                            <?php if ($ruta->domingo==1) {
                                                  echo "<i class='fas fa-check-circle text-success'></i>";
                                              }
                                              else {
                                                  echo "<i class='fas fa-minus-circle text-danger'></i>";
                                              }?>
                                            </td>                                 
                                            <td><?php echo $ruta->departamento;?></td>
                                            <td><?php echo $ruta->municipio;?></td>
                                           
                                            <td>
                                                <div class="btn-group">
                                                     <a href="<?php echo base_url()?>rutas/rutas/asignar/<?php echo $ruta->id;?>" class="btn btn-success"><span class="fas fa-user-check"></span></a>

                                                      <a href="<?php echo base_url()?>rutas/rutas/asignacion/<?php echo $ruta->id;?>" class="btn btn-primary"><span class="fas fa-eye"></span></a>

                                                    <a href="<?php echo base_url()?>rutas/rutas/editar/<?php echo $ruta->id;?>" class="btn btn-warning"><span class="fas fa-pencil-alt"></span></a>

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