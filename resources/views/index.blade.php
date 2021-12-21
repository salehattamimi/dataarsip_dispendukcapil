<!DOCTYPE html>
<html lang="en">
<head> 
    @include('include.style')  
</head>

<body class="navbar-bottom">

    <!-- Main navbar --> 
    @include('include.navbar')  
    <!-- /main navbar -->


    <!-- Page header -->

    <!-- /page header -->

    <!-- <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard <small>Hello, Victoria!</small></h4>
        </div>

        <div class="heading-elements">
            <div class="heading-btn-group">
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-bars-alt text-indigo-400"></i><span>Statistics</span></a>
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calculator text-indigo-400"></i><span>Invoices</span></a>
                <a href="#" class="btn btn-link btn-float text-size-small has-text"><i class="icon-calendar5 text-indigo-400"></i><span>Schedule</span></a>
            </div>
        </div>
    </div> -->
    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            @include('include.left_sidebar')
            <!-- /main sidebar -->


            <!-- Main content -->
            @yield('tempat_content')
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->


    <!-- Footer -->
    @include('include.footer')
    <!-- /footer -->

</body>
</html>
<script type="text/javascript">

     

    Highcharts.chart('div_grafik_barang_keluar', {

        chart: {
            type: 'column'
        },

        title: {
            text: 'Grafik Berkas Arsip B'
        },

        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
        },

        yAxis: {
            allowDecimals: false,
            min: 0,
            title: {
                text: 'Number of fruits'
            }
        },

        tooltip: {
            formatter: function () {
                return '<b>' + this.x + '</b><br/>' +
                this.series.name + ': ' + this.y + '<br/>' +
                'Total: ' + this.point.stackTotal;
            }
        },

        plotOptions: {
            column: {
                stacking: 'normal'
            }
        },

        series: [{
            name: 'John',
            data: [5, 3, 4, 7, 2],
            stack: 'male'
        }, {
            name: 'Joe',
            data: [3, 4, 4, 2, 5],
            stack: 'male'
        }, {
            name: 'Jane',
            data: [2, 5, 6, 2, 1],
            stack: 'female'
        }, {
            name: 'Janet',
            data: [3, 0, 4, 4, 3],
            stack: 'female'
        }]
    });
</script>