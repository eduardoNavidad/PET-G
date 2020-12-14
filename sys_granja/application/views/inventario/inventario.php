    <div class="col-sm-6">
            <h1>Inventario granja</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Inventario</li>
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Codigo</th>
                                    <th>Nombre</th>
                                   
                                    <th>Precio Entrada</th>
                                    <th>Inventario Minimo</th>
                                    <th>Stock</th>
                                    <th>Categoria</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(!empty($productos)):?>
                                    <?php foreach($productos as $producto):?>
                                        <tr>
                                            <td><?php echo $producto->id;?></td>
                                            <td><?php echo $producto->codigo;?></td>
                                            <td><?php echo $producto->nombre;?></td>
                                            <td><?php echo "$ ".number_format($producto->precio_entrada,2);?></td>
                                            <td><?php echo $producto->minimo_inventario;?></td>
                                            <td><?php echo $producto->stock;?></td>                                           
                                            <td><?php echo $producto->categoria;?></td>
                                            <?php $dataproducto = $producto->id."*".$producto->codigo."*".$producto->nombre."*".$producto->descripcion."*".$producto->precio_entrada."*".$producto->categoria;?>
                                            <td>
                                            <div class="btn-group">
                                            <form action="<?php echo base_url();?>inventario/inventario/ver_historial/" method="POST" class="form-horizontal">
                                            <input type="hidden" name="id" id="id" value="<?php echo $producto->id;?>" >
                                            <button type="submit" class="btn btn-danger btn-flat">Historial <span class="fas fa-eye" ></span> </button>
                                            </form>
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