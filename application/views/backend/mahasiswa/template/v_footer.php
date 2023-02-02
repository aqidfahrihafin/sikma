<script src="<?php echo base_url('assetss/')?>js/highcharts.js" type="text/javascript"></script>

<script type="text/javascript">
				var chart;
				$(document).ready(function () {
					chart = new Highcharts.Chart({
						chart: {
							renderTo: 'container-pie-berkas',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Berkas Approval'
						},
						tooltip: {
							pointFormat: '{series.name}: <b>{point.percentage}%</b>',
							percentageDecimals: 1
						},
						plotOptions: {
							pie: {
								allowPointSelect: true,
								cursor: 'pointer',
								dataLabels: {
									enabled: false
								},
								showInLegend: true
							}
						},
						series: [{
							type: 'pie',
							name: 'Jumlah',
							colorByPoint: true,
							data: [
								['Approved', 9],
								['Not Approved', <?php echo $pending; ?>],
								['Wait', <?php echo $ditolak; ?>],
							]
						}]
					});
				});
</script>
		<!-- end #content -->
		<!-- begin #footer -->
		<!-- <div id="footer" class="footer">
			&copy; 2020. <a href="http://www.rajaputramedia.com/" target="_blank">E-SKRIPSI</a> Version 2.0 - All Rights
			Reserved
		</div> -->
		<!-- end #footer -->
		<!-- begin theme-panel -->
		<!-- end theme-panel -->
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade"
			data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>

	<!-- end page container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url('assetss/')?>plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url('assetss/')?>crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url('assetss/')?>crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url('assetss/')?>crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url('assetss/')?>plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url('assetss/')?>plugins/gritter/js/jquery.gritter.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/flot/jquery.flot.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/flot/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/flot/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/flot/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery-jvectormap/jquery-jvectormap.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery-jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>

	<script src="<?php echo base_url('assetss/')?>plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>js/table-manage-responsive.demo.min.js"></script>

	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/masked-input/masked-input.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/password-indicator/js/password-indicator.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery-tag-it/js/tag-it.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-daterangepicker/moment.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/select2/dist/js/select2.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-show-password/bootstrap-show-password.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/jquery-simplecolorpicker/jquery.simplecolorpicker.js"></script>
	<script src="<?php echo base_url('assetss/')?>plugins/clipboard/clipboard.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>js/form-plugins.demo.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>js/dashboard.min.js"></script>
	<script src="<?php echo base_url('assetss/')?>js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
<!-- required files -->
<!-- logout timer -->
		<script>
			var timeout = <?php echo $this->config->item('sess_expiration'); ?>; // dalam detik
			var timer = setTimeout(function() {
				window.location = "<?php echo site_url('dashboard/logout'); ?>";
			}, timeout * 1000);

			document.addEventListener("mousemove", resetTimer);
			document.addEventListener("keypress", resetTimer);
			function resetTimer() {
				clearTimeout(timer);
				timer = setTimeout(function() {
					window.location = "<?php echo site_url('dashboard/logout'); ?>";
				}, timeout * 1000);
			}
		</script>
		<!-- modal pdf -->
		<script>
     $(document).ready(function(){
     $('#pdfModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var pdf = button.data('pdf');
        var modal = $(this);
        modal.find('iframe').attr('src', pdf);
    });
   });
   </script>



	<script>
		$(document).ready(function () {
			App.init();
			TableManageResponsive.init();
			FormPlugins.init();
		});
	</script>
</body>

</html>