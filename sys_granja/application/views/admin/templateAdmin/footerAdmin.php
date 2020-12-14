 </div>
  <!-- /.content-wrapper -->

 <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Sys granja</strong> El Salvador, America Central. Todos los Derechos Reservados. 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<script src="<?php echo base_url().'assets/plugins/datatables-buttons/js/dataTables.buttons.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery/jquery.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery/jquery.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery-ui/jquery-ui.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery/funciones.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/jquery/ordenes.js'; ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url().'assets/plugins/bootstrap/js/bootstrap.bundle.min.js'; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/adminlte.min.js'; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'; ?>"></script>
<!-- AdminLTE for tables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables-responsive/js/dataTables.responsive.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js'; ?>"></script>

<script>
  $(function () {
    $("#example2").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example1').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>

</body>
</html>
