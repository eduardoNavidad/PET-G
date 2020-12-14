 <div class="col-sm-6">
            <h1>Abastecer</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'inventario/inventario'; ?>">Inventario</a></li>
              <li class="breadcrumb-item active">Abastecer inventario</li>
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
                   <!--  <div class="col-md-12">
                        <a href="<?php echo base_url();?>administrador/productos/agregar" class="btn btn-warning btn-flat"><span class="fa fa-plus-square"></span> Agregar Ingreso</a>

                        <a href="<?php echo base_url();?>administrador/productos/agregar" class="btn btn-danger btn-flat"><span class="fa fa-minus-square"></span> Agregar Egreso</a> -->
                        
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
                    <form action="<?php echo base_url();?>inventario/inventario/guardar_ingreso" method="POST" class="form-horizontal">
                            
                            
                            <div class="form-group">
                               <div class="row">
                                <div class="col-md-6">
                                    <label for="">Buscar producto por nombre</label>
                                    <input type="text" class="form-control" id="producto">
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <button id="btn-agregar" type="button" class="btn btn-warning btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                </div>
                               </div>
                            </div>
                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Nombre</th>

                                        <th>Precio</th>
                                        <th>Unidad En inventario</th>
                                        <th>Entrada en unidades</th>
                                        <th>Importe</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                </tbody>
                            </table>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">Total :</span>
                                        <input type="text" class="form-control" placeholder="Total" name="subtotal" readonly="readonly">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-warning btn-flat">Guardar</button>
                                </div>
                                
                            </div>
                        </form>
                </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->

   