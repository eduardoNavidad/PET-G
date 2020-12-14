
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url().'principal/principal1' ?>">Inicio</a></li>
    <li class="breadcrumb-item"><a href="<?php echo base_url().'mantenimiento/proveedores' ?>">Listado Provedores</a></li>
    
    <li class="breadcrumb-item active" aria-current="page">Editar Proveedores</li>
  </ol>
</nav>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
        proveedors
        <small>Editar</small>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box box-solid">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($this->session->flashdata("error")):?>
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p><i class="icon fa fa-ban"></i><?php echo $this->session->flashdata("error"); ?></p>
                                
                             </div>
                        <?php endif;?>
                        <form action="<?php echo base_url();?>mantenimiento/proveedores/update" method="POST">
                            <input type="hidden" name="idproveedor" value="<?php echo $proveedor->id;?>">
                           
                            <div class="form-group <?php echo form_error("nombreEmpresa") != false ? 'has-error':'';?>">
                                <label for="nombreEmpresa">Empresa:</label>
                                <input type="text" class="form-control" id="nombreEmpresa" name="nombreEmpresa" value="<?php echo form_error("nombreEmpresa") !=false ? set_value("nombreEmpresa") : $proveedor->nombreEmpresa;?>" required>
                                <?php echo form_error("nombreEmpresa","<span class='help-block'>","</span>");?>
                            </div>
                            <div class="form-group <?php echo form_error("nombreEmpresa") != false ? 'has-error':'';?>">
                                <label for="NIT">NIT:</label>
                                <input type="text" class="form-control" id="NIT" name="NIT" value="<?php echo form_error("NIT") !=false ? set_value("NIT") : $proveedor->NIT;?>" required>
                                <?php echo form_error("NIT","<span class='help-block'>","</span>");?>
                            </div>
                            
                            
                            <div class="form-group">
                                <label for="RazonSocial">Razon Social:</label>
                                <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" value="<?php echo $proveedor->RazonSocial;?>" required>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Direccion:</label>
                                <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $proveedor->direccion;?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">email:</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $proveedor->email;?>" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Telefono:</label>
                                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $proveedor->telefono;?>" required>
                            </div>
                            
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-flat">Guardar</button>
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
</div>
<!-- /.content-wrapper -->
