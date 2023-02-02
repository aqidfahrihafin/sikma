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
                    text: 'Approval'
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
                        ['Approved', <?php echo $diterima; ?>],
                        ['Not Approved', <?php echo $pending; ?>],
                        ['Pending', <?php echo $ditolak; ?>],
                    ]
                }]
            });
        });
</script>