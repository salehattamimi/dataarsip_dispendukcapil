<script type="text/javascript">
    // Create the chart
Highcharts.chart('div_grafik_media', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Jumlah Media Per Tahun'
    },
    subtitle: {
        text: 'Jumlah Media'
    },
    accessibility: {
        announceNewData: {
            enabled: true
        }
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'Total Point'
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
                format: '{point.y:.1f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b> <br/>'
    },

    series: [
        {
            name: "Kredit Point",
            colorByPoint: true,
            data: [
                 @foreach($arsip_media as $arsip)
                    {
                        name: "{{$arsip->tahun_arsip}}",
                        y: <?php echo $arsip->jumlah_tahun ?>
                    }, 
                @endforeach
            ]
        }
    ] 
});
     
</script>
