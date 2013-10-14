<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script>

  $(function () {
        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: '<?php echo $title; ?>'
            },
            subtitle: {
                text: 'SEO homework'
            },
            xAxis: {
                categories: <?php echo $categories ?>,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Nombre de logs',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            // tooltip: {
            //     valueSuffix: 'milliers'
            // },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 100,
                floating: true,
                borderWidth: 1,
                backgroundColor: '#FFFFFF',
                shadow: true
            },
            credits: {
                enabled: false
            },
            series: [{
                name: 'Logs',
                data: <?php echo $data; ?>
            }]
        });
    });

</script>
