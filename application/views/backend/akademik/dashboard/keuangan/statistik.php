<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
									data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
									data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
									data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
									data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title"><i class="ion-stats-bars fa-lg text-warning"></i>
								&nbsp;Statistik Keuangan</h4>
						</div>
						<div class="panel-body">
							<div id="container-pie-a" class="height-sm"></div>
						</div>
					
						<script type="text/javascript">
							var chart;
							$(document).ready(function () {
								chart = new Highcharts.Chart({
									chart: {
										renderTo: 'container-pie-a',
										plotBackgroundColor: null,
										plotBorderWidth: null,
										plotShadow: false
									},
									title: {
										text: 'Keuangan'
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
											['Valid', <?php echo $diterima; ?>],
											['Tidak Valid', <?php echo $pending; ?>],
											['Pending', <?php echo $ditolak; ?>],
										]
									}]
								});
							});
					</script>
					
					</div>
				</div>