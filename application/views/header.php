<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

<!--<link rel="stylesheet" href="<?php echo base_url(); ?>lib/bootstrap-4.3.1-dist/css/bootstrap.min.css" />-->
    
    <link href="<?php echo base_url(); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>sb-admin-2.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  

  <!-- Custom styles for this template-->

</head>

<body id="page-top">

	<nav class="navbar navbar-primary  bg-primary">
    <form method="POST" action="#" class="form-inline my-4 my-lg-0 ml-auto">
        <a href="<?php echo base_url('user/user_logout');?>" >  <button type="button" class="btn-success">SALIR</button></a>
    </form>
  </nav>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Sistema de Biblioteca<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Vista General</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>index.php/Ejemplar"  >
          <i class="fas fa-fw fa-table"></i>
          <span>Ejemplares</span>
        </a>
        
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>index.php/Autor" >
          <i class="far fa-id-badge"></i>
          <span>Autores</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url(); ?>User" >
          <i class="fas fa-book"></i>
          <span>Peticiones del Libro</span>
        </a>
        
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" >
          <i class="fas fa-book-dead"></i>
          <span>Libros prestados</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" >
          <i class="fas fa-fw fa-table"></i>
          <span>Reportes</span></a>
      </li>

      <!-- Heading -->
      <div class="sidebar-heading">

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-user"></i>
          <span>Datos del Administrador</span></a>
      </li>
      <!--divide-->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->

    </ul>

    <!-- End of Sidebar -->



    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

         
          

   
            <div class="col-lg-6 mb-4">


      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
          </div>
        </div>
      </footer>

    </div>

  </div>

   

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?php echo base_url(); ?>vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?php echo base_url(); ?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url(); ?>js/demo/chart-pie-demo.js"></script>


