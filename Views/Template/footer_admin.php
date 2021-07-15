  <!-- Main Footer -->
  <footer class="main-footer text-sm">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      <a href="#">Soporte | </a> <a href="#">Levantar Ticket | </a> Versión v1.0
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2020-<?php echo date('Y'); ?> <a href="https://seuat.mx">ERP SEUAT</a>.</strong> Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->


    <script>
        const base_url = "<?= base_url(); ?>";
    </script>

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="<?php echo media(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo media(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo media(); ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo media(); ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- InputMask -->
<script src="<?php echo media(); ?>/plugins/moment/moment.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo media(); ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo media(); ?>/js/adminlte.js"></script>

<!-- Iconos -->
<script src="<?php echo media(); ?>/js/app.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?= media(); ?>/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= media(); ?>/js/dashboard3.js"></script>
<!--Sweet Alert 2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!--<script type="text/javascript" src="<?= media();?>/js/functions_admin.js"></script>-->
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

<!--<p>Framework v1.0 Para ERP Azteca- <a href="https://seuat.mx">www.seuat.mx</p>-->
</body>
</html>