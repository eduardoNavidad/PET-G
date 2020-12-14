 <div class="col-sm-6">
            <h1>Nueva orden de pedido</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Ordenes de pedido</a></li>
              <li class="breadcrumb-item active">Nueva orden de pedido</li>
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
                                  <p><b>Buscar cliente:</b></p>
                                  <form action="<?php echo base_url();?>inventario/inventario/guardar_ingreso" method="POST" id="buscar_cliente">
                                  <div class="row">
                                    <div class="col-md-8">
                                      <input type="hidden" name="view" value="sell">
                                      <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Buscar cliente">
                                    </div>
                                    <div class="col-md-3">
                                    <button type="button" class="btn btn-warning"><i class="glyphicon glyphicon-search"></i> Buscar</button>
                                    </div>



                                    <!-- <div class="form-group">
                                      <div class="col-md-12">
                                          <button type="submit" class="btn btn-warning btn-flat">Guardar</button>
                                      </div>
                                    </div> -->

                                  </div>
                                  </form>
                                  <div id="pintar_cliente"></div>
                         </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->