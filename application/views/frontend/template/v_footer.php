 <!-- Main Footer -->
 <footer class="main-footer" style=" background: linear-gradient( rgb(32, 109, 180), rgb(41, 143, 173));color: white; ">
     <!-- To the right -->
     <div class="pull-right hidden-xs">
         Institut sains dan Teknologi Annuqayah
     </div>
     <!-- Default to the left -->
     <strong>Copyright &copy; 2022 <a style="color: rgb(238, 222, 74);" href="#">Aqid Fahri Hafin</a>.</strong> All
     rights
     reserved.
 </footer>

 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED JS SCRIPTS -->

 <!-- jQuery 3 -->
 <script src="<?php echo base_url('assets'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap 3.3.7 -->
 <script src="<?php echo base_url('assets'); ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo base_url('assets'); ?>/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo base_url('assets'); ?>/dist/js/demo.js"></script>
 <script src="<?php echo base_url('assets'); ?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
 <script src="<?php echo base_url('assets'); ?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
 <!-- SlimScroll -->
 <script src="<?php echo base_url('assets'); ?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
 <!-- FastClick -->
 <script src="<?php echo base_url('assets'); ?>/bower_components/fastclick/lib/fastclick.js"></script>
 <script>
     $(function() {
         $('#example1').DataTable()
         $('#example2').DataTable({
             'paging': true,
             'lengthChange': false,
             'searching': false,
             'ordering': true,
             'info': true,
             'autoWidth': false
         })
     })
 </script>
 </body>

 </html>