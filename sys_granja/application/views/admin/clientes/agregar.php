       <div class="col-sm-6">
            <h1>Agregar clientes</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/clientes'; ?>">Clientes</a></li>
              <li class="breadcrumb-item active">Agregar</li>
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
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>Administrador/clientes/guardar" method="POST">

                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-10">
                                  <input type="tel" required class="form-control" id="telefono" name="telefono" maxlength="9" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Direccion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="direccion" name="direccion" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Celular</label>
                                <div class="col-sm-10">
                                  <input type="tel" class="form-control" id="celular" name="celular" maxlength="9" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Tipo Cliente</label>
                                <div class="col-sm-10">
                                  <select name="tipo_cliente_id" id="tipo_cliente_id" class="form-control" required>
                                    <?php foreach($tiposclientes as $tp):?>
                                        <option value="<?php echo $tp->id?>"><?php echo $tp->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">DUI</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="dui" name="dui" placeholder="00000000-0" maxlength="10" data-inputmask="'alias': '00000000-0'" data-mask >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">NIT</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nit" name="nit" placeholder="0000-000000-000-0" data-inputmask="'alias': '0000-000000-000-0'"maxlength="17" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">N° Registro</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="registro" name="registro" maxlength="10" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">email</label>
                                <div class="col-sm-10">
                                  <input type="email" class="form-control" id="email" name="email" maxlength="50" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Giro</label>
                                <div class="col-sm-10">
                                  <select name="giro_id" id="giro_id" class="form-control" required>
                                    <?php foreach($giros as $giro):?>
                                        <option value="<?php echo $giro->idactividad?>"><?php echo $giro->descripcion;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Departamento</label>
                                <div class="col-sm-10">
                                  <select name="departamento" id="departamento" class="form-control" required>
                                    <?php foreach($departamentos as $departamento):?>
                                        <option value="<?php echo $departamento->id?>"><?php echo $departamento->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Municipio</label>
                                <div class="col-sm-10">
                                  <select name="municipio" id="municipio" class="form-control" required>
                                    <?php foreach($municipios as $municipio):?>
                                        <option value="<?php echo $municipio->id?>"><?php echo $municipio->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            
                
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning btn-flat">Guardar</button> 
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'Administrador/clientes'; ?>">Cancelar</a></button>
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
<script>
    $("#departamento").on({
        "change":function(){
            var id = $(this).val();
            traermunicipios(id);
        }
    });
    function traermunicipios(id){
        $.ajax({
           url: 'traermunicipios',
           type: 'post',
           dataType: 'json',
           data: {id:id},
           beforeSend: function(){
             
           },
           success:function(data){
            if(data.ok){
                var municipios = $("#municipio");
                municipios.empty();
                var options = "Seleccione...";
                $.each(data.municipios,function(k,v){
                    options+='<option value='+v.id+'>'+v.nombre+'</option>';
                });
                municipios.append(options);
            }else{
                
            }
           }
        });
    }
</script>                   