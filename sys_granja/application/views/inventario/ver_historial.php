 <div class="col-sm-6">
            <h1>Historial</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'inventario/inventario'; ?>">Inventario</a></li>
              <li class="breadcrumb-item active">Historial de inventario</li>
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
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                      <strong class="text-warning"><?php echo $producto->nombre ?></strong>
                      <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Tipo de movimiento</th>
                                    <th>fecha</th>
                                    <th>usuario</th>  
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($historiales)):?>
                                    <?php foreach($historiales as $operacion):?>
                                        <tr>
                                            <td><?php echo $operacion->nombre;?></td>
                                            <td><?php echo $operacion->cantidad;?></td>
                                            <td><?php echo $operacion->operacion;?></td>
                                            <td><?php echo $operacion->fecha_movimiento;?></td>
                                            <td><?php echo $operacion->usuario;?></td> 
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