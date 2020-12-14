       <div class="col-sm-6">
            <h1>Editar Productos</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/productos'; ?>">Productos</a></li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

   <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">           
            <div class="row">
                <div class="col-md-12">
                <!-- /.card -->
                <div class="card card-info">
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>Administrador/productos/modificar" method="POST">
                    <input type="hidden" name="idproducto" value="<?php echo $producto->id;?>">
                    <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Codigo</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo $producto->codigo?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" value="<?php echo $producto->nombre?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Descripcion</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="descripcion" name="descripcion" value="<?php echo $producto->descripcion?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Precio Entrada</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="precioe" name="precioe" value="<?php echo $producto->precio_entrada?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Stock</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="stock" name="stock"  value="<?php echo $producto->stock?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Minimo inventario</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="minimo_inventario" name="minimo_inventario" value="<?php echo $producto->minimo_inventario?>" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Categoria</label>
                                <div class="col-sm-10">
                                  <select name="categoria" id="categoria" class="form-control" value="<?php echo $producto->categoria?>" required>
                                    <?php foreach($categorias as $categoria):?>
                                        <option value="<?php echo $categoria->id?>"><?php echo $categoria->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>
                            
                
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-flat">Guardar</button> 
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'Administrador/productos'; ?>">Cancelar</a></button>
                    </div>
                                
                </form>

                </div>
                <!-- /.card -->    
                </div>
            </div>
        
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->


                        