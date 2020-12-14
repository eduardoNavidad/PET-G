<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sys granja</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/fontawesome-free/css/all.min.css'; ?>">

  <!--jquery ui -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.css'; ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/adminlte.min.css'; ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css'; ?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css'; ?>">
  
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="sidebar-mini layout-fixed accent-warning">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-warning">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url().'Administrador/adminpanel'; ?>" class="nav-link">Inicio</a>
      </li>
      
    </ul>

    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Usuario
                  <span class="float-right text-sm text-danger"><i class="fas fa-User"></i></span>
                </h3>
                <p class="text-sm text-warning"><?php echo $this->session->userdata('nombre_completo'); ?></p>
                <div class="dropdown-divider"></div>
                <h3 class="dropdown-item-title">
                  Cod. empleado
                  <span class="float-right text-sm text-danger"><i class="fas fa-User"></i></span>
                </h3>
                <p class="text-sm text-warning"><?php echo $this->session->userdata('cod_empleado'); ?></p>
                <div class="dropdown-divider"></div>
                <h3 class="dropdown-item-title">
                  Area
                  <span class="float-right text-sm text-danger"><i class="fas fa-User"></i></span>
                </h3>
                <p class="text-sm text-warning"><?php echo $this->session->userdata('area'); ?></p>
              </div>
            </div>

            <!-- Message End --> 
          </a>
          
          
          <div class="dropdown-divider"></div>
         
          <div class="dropdown-divider"></div>
          <a href="<?php echo base_url().'Admin/logout'; ?>" class="dropdown-item dropdown-footer"><p class="text-sm text-muted"><i class="fas fa-power-off"></i> Cerrar Sesion</p></a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
    
    </ul>
  </nav>
  <!-- /.navbar -->