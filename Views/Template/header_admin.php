<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $data['page_tag']; ?></title>
	<link rel="shortcut icon" href="<?= media();?>/images/icons/icon-48x48.png" />

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo media(); ?>/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo media(); ?>/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo media(); ?>/css/styles.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo media(); ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo media(); ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= media(); ?>/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="<?= media(); ?>/plugins/sweetalert2/sweetalert2.min.css" type="text/css">

  <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
</head>


<?php require_once("nav_admin.php"); ?>