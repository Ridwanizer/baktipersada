<?php
require 'koneksi.php';

$sql = "SELECT * FROM `ekspor`";
                                            $querySql = mysqli_query($conn,$sql);
                                            while ($row = mysqli_fetch_array($querySql)) {
                                                $a[]=$row['Bulan'];
                                                $b[]=$row['Ton'];
                                            }
                                            $c=json_encode($b);
                                            $d= str_replace('"', '', $c);


?>
<!DOCTYPE html>
<html>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Ekspor Produk Kopi 2018'
    },
    subtitle: {
        text: 'Source: Bakti Persada Hijau'
    },
    xAxis: {
       categories : <?php echo json_encode($a); ?>
    },
    yAxis: {
        title: {
            text: 'Jumlah Dalam Satuan (Ton)'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f} Ton'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}Ton</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data":<?php echo $d; ?>
        }
    ],
});
</script>



<html>