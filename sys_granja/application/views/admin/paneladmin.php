    <div class="col-sm-6">
            <h1>Inicio</h1>
          </div>      
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'Administrador/AdminPanel'; ?>">Inicio</a></li>
              <li class="breadcrumb-item active">Inicio</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Clientes</span>
                <span class="info-box-number">
                  <?php $num=$this->db->count_all('cat_clientes');?><?php echo $num; ?>
                  <small></small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-egg"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Productos</span>
                <span class="info-box-number"><?php $num=$this->db->count_all('cat_productos');?><?php echo $num; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ventas</span>
                <span class="info-box-number"><?php $num=$this->db->count_all('');?><?php echo $num; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-truck"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Rutas</span>
                <span class="info-box-number"><?php $num=$this->db->count_all('cat_rutas');?><?php echo $num; ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

              <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
    

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Ultimas ventas</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>N Factura</th>
                      <th>Cliente</th>
                      <th>Estado</th>
                      <th>Monto</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR9842</a></td>
                      <td>Super Selectos</td>
                      <td><span class="badge badge-warning">En proceso</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">$ 1500</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Super Selectos</td>
                      <td><span class="badge badge-warning">En proceso</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">$ 1500</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Super Selectos</td>
                      <td><span class="badge badge-success">Entregada</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">$ 1500</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR7429</a></td>
                      <td>Super Selectos</td>
                      <td><span class="badge badge-warning">En proceso</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">$ 1500</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-danger">Pendiente</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">$ 1500</div>
                      </td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Nueva venta</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Ver todas las ventas</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
           <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Productos</h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>insumo</th>
                    <th>Minimo</th>
                    <th>Stock</th>
                  </tr>
                  </thead>
                  <tbody>
                     <?php if(!empty($productos)):?>
                        <?php foreach($productos as $insumos):?>
                          <tr>
                            <?php
                            if($insumos->stock==0){
                              ?>
                            <td class="danger"><?php echo $insumos->codigo;?></a></td>
                            <td class="danger"><?php echo $insumos->nombre;?></td>
                            <td class="danger"><?php echo $insumos->minimo_inventario?></td>
                            <td class="danger"><span class="label label-danger"><?php echo $insumos->stock?></span></td>
                            <?php
                            }else{
                              ?>
                            <td class="warning"><?php echo $insumos->codigo;?></a></td>
                            <td class="warning"><?php echo $insumos->nombre;?></td>
                            <td class="warning"><?php echo $insumos->minimo_inventario?></td>
                            <td class="warning"><span class="label label-warning"><?php echo $insumos->stock?></span></td>
                            <?php
                            }
                              ?>
                          </tr>
                        <?php endforeach;?>
                    <?php endif;?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
  