       <div class="col-sm-6">
            <h1>Asignar rutas a clientes</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/adminpanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url().'rutas/rutas'; ?>">rutas</a></li>
              <li class="breadcrumb-item active">Asignar</li>
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
                  
                <form  class="form-horizontal" action="<?php echo base_url();?>rutas/rutas/guardar_asignar" method="POST">

                    <div class="card-body">

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Clientes</label>
                                <div class="col-sm-10">
                                  <select name="cliente" id="cliente" class="form-control" required>
                                    <?php foreach($clientes as $cliente):?>
                                        <option value="<?php echo $cliente->id?>"><?php echo $cliente->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Rutas</label>
                                <div class="col-sm-10">
                                  <select name="ruta" id="ruta" class="form-control" required>
                                    <?php foreach($rutas as $ruta):?>
                                        <option value="<?php echo $ruta->id?>"><?php echo $ruta->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Motoristas</label>
                                <div class="col-sm-10">
                                  <select name="motorista" id="motorista" class="form-control" required>
                                    <?php foreach($motoristas as $motorista):?>
                                        <option value="<?php echo $motorista->id?>"><?php echo $motorista->nombre;?></option>
                                    <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-2 col-form-label">Motoristas</label>
                                <div class="col-sm-10">
                                  <select name="unidad_transporte" id="unidad_transporte" class="form-control" required>
                                    <?php foreach($unidad_transportes as $unidad_transporte):?>
                                        <option value="<?php echo $unidad_transporte->id?>"><?php echo $unidad_transporte->Nombre;?></option>
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