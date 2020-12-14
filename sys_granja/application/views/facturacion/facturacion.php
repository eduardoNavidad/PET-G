 <div class="col-sm-6">
            <h1>Vender</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Productos</li>
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

                                  <p><b>Buscar producto por nombre o por codigo:</b></p>
                                  <form id="searchp">
                                  <div class="row">
                                    <div class="col-md-3">
                                      <input type="hidden" name="view" value="sell">
                                      <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Nombre del Producto">
                                    </div>

                                    <div class="col-md-3">
                                      <input type="hidden" name="view" value="sell">
                                      <input type="text" id="product_code" name="product_code" class="form-control" placeholder="Codigo de Barra">
                                    </div>


                                    <div class="col-md-1">
                                    <button type="submit" class="btn btn-warning"><i class="glyphicon glyphicon-search"></i> Buscar</button>
                                    </div>
                                    <div class="col-md-1">
                                    </div>

                                  </div>
                                  </form>


                                  <div id="show_search_results"></div>


<script>
//jQuery.noConflict();

$(document).ready(function(){
  $("#searchp").on("submit",function(e){
    e.preventDefault();

    code = $("#product_code").val();
    name = $("#product_name").val();
    if(name!=""){
    $.get("./?action=searchproduct",$("#searchp").serialize()+"&go=name",function(data){
      $("#show_search_results").html(data);
    });
    $("#product_name").val("");
    }
    else if(code!=""){
    $.get("./?action=searchproduct",$("#searchp").serialize()+"&go=code",function(data){
      $("#show_search_results").html(data);
    });
    $("#product_code").val("");
    }else {
      $("#show_search_results").html("");
    }

  });
  });

$(document).ready(function(){
    $("#product_code").keydown(function(e){
        if(e.which==17 || e.which==74){
            e.preventDefault();
        }else{
            console.log(e.which);
        }
    })
});
</script>
                         </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->