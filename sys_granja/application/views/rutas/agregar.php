       <div class="col-sm-6">
            <h1>Agregar rutas</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'rutas/rutas'; ?>">rutas</a></li>
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
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>rutas/rutas/guardar" method="POST">

                    <div class="card-body">
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre ruta</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="nombre" name="nombre" maxlength="100" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Dias de ruta</label>
                                <div class="col-sm-10">
                                  <div class="row">
                                  <div class="col-sm-5">
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="lunes" name="lunes" value="1" >
                                      <label for="lunes" class="custom-control-label">Lunes</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="martes" name="martes" value="1" >
                                      <label for="martes" class="custom-control-label">Martes</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="miercoles" name="miercoles" value="1" >
                                      <label for="miercoles" class="custom-control-label">Miercoles</label>
                                    </div>
                                  </div>

                                  <div class="col-sm-5">
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="jueves" name="jueves" value="1">
                                      <label for="jueves" class="custom-control-label">Jueves</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="viernes" name="viernes" value="1" >
                                      <label for="viernes" class="custom-control-label">Viernes</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="sabado" name="sabado" value="1" >
                                      <label for="sabado" class="custom-control-label">Sabado</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" id="domingo" name="domingo" value="1" disabled >
                                      <label for="domingo" class="custom-control-label">Domingo</label>
                                    </div>
                                  </div>
                                  </div>
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
                        <button class="btn btn-default float-right"><a href="<?php echo base_url().'rutas/rutas'; ?>">Cancelar</a></button>
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