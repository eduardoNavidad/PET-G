<!-- Main Sidebar Container -->
  <aside class="main-sidebar elevation-4 sidebar-light-warning">
    <!-- Brand Logo -->
    <a href="<?php echo base_url().'Administrador/adminpanel'; ?>" class="brand-link">
      <img src="<?php echo base_url().'assets/dist/img/embl.png'; ?>"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-dark">Sys Granja</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
     <!--  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url().'assets/dist/img/user2-160x160.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item" >
            <a href="<?php echo base_url().'Administrador/adminpanel'; ?>" class="nav-link active ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
              </p>
            </a>
            
          </li>
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Catalogos
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
               <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/categorias'; ?>" class="nav-link">
                  <p>Categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/clientes'; ?>" class="nav-link">
                  <p>Clientes</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/motoristas'; ?>" class="nav-link">
                  <p>Motoristas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/productos'; ?>" class="nav-link">
                  <p>Productos</p>
                </a>
              </li>
             <!--  <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/proveedores'; ?>" class="nav-link">
                  <p>Proveedores</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/unidad_transporte'; ?>" class="nav-link">
                  <p>Unidad transporte</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cubes"></i>
              <p>
               Inventario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'inventario/inventario'; ?>" class="nav-link">
                  <p>Inventario de granja</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="<?php echo base_url().'inventario/inventario/abastecer'; ?>" class="nav-link">
                  <p>Abastecer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../UI/icons.html" class="nav-link">
                 
                  <p>Inventario concentrado</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard"></i>
              <p>
                Orden de pedido
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'orden_pedido/orden_pedido'; ?>" class="nav-link">
                 
                  <p>Nueva Orden</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'orden_pedido/orden_pedido'; ?>" class="nav-link">
                 
                  <p>Ordenes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Rutas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url();?>rutas/rutas/agregar" class="nav-link">
                 
                  <p>Nueva ruta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                 
                  <p>Rutas</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Facturacion
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'facturacion/facturacion'; ?>" class="nav-link">
                 
                  <p>Nueva venta</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'facturacion/facturacion'; ?>" class="nav-link">
                 
                  <p>Ventas</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user-cog"></i>
              <p>
                Gestión de usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/gestion_usuarios'; ?>" class="nav-link">
                 
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'Administrador/gestion_usuarios/roles'; ?>" class="nav-link">
                 
                  <p>Perfiles</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-paste"></i>
              <p>
                Reportes
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Reporte de inventario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Por categorias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Buscar producto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Ventas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Ventas por Rutas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Compras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url().'rutas/rutas'; ?>" class="nav-link">
                  <p>Caja</p>
                </a>
              </li>
              
            </ul>
          </li>
          
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>