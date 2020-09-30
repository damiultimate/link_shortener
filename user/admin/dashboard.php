        <?php
        error_reporting(0);

        $ajax = false;
foreach(getallheaders() as $key => $value){
    if(strtolower($value)==strtolower('XMLHttpRequest')){
$ajax=true;
    }
}

if(strpos($_SERVER['SCRIPT_NAME'], "index.php")){

}

else if($ajax==false){

echo '<h1>Access denied. You have not been granted the permissions necessary to access this page </h1>';
die();
}
     ?>

         <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-users icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Dashboard
                                        <div class="page-title-subheading">This is a detailed view of your earnings. Note, earnings are updated once every 24 hours.
                                        </div>
                                    </div>
                                </div>
                                
                                   </div>
                        </div>            <div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Views</div>
                                            <div class="widget-subheading">Total views since last withdrawal</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>1896</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Leads</div>
                                            <div class="widget-subheading">Total leads since last withdrawal</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>2509</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-3 widget-content bg-grow-early">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Earnings</div>
                                            <div class="widget-subheading">Total earnings since last withdrawal</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$456</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Traffic Chart</h3>

                            <!-- <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <div class="chart">
                            <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                        <div class="row my-5">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Traffic Details
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Country</button>
                                                <button class="btn btn-focus">Operating System</button>
                                                <button class="btn btn-focus">Device Type</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">ID</th>
                                                <th class="text-center">Country</th>
                                                <th class="text-center">Views</th>
                                                <th class="text-center">Leads</th>
                                                <th class="text-center">Earnings</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center text-muted">#345</td>
                                                <td class="text-center text-muted">USA</td>
                                                <td class="text-center text-muted">100</td>
                                                <td class="text-center text-muted">50</td>
                                                <td class="text-center text-muted">20</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#346</td>
                                                <td class="text-center text-muted">China</td>
                                                <td class="text-center text-muted">100</td>
                                                <td class="text-center text-muted">50</td>
                                                <td class="text-center text-muted">20</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#347</td>
                                                <td class="text-center text-muted">Germany</td>
                                                <td class="text-center text-muted">100</td>
                                                <td class="text-center text-muted">50</td>
                                                <td class="text-center text-muted">20</td>
                                            </tr>
                                            <tr>
                                                <td class="text-center text-muted">#348</td>
                                                <td class="text-center text-muted">Brazil</td>
                                                <td class="text-center text-muted">100</td>
                                                <td class="text-center text-muted">50</td>
                                                <td class="text-center text-muted">20</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- <div class="d-block text-center card-footer">
                                        <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <!-- chart script -->
<script>
    $(function () {
        /* ChartJS
        * -------
        * Here we will create a few charts using ChartJS
        */

        //--------------
        //- AREA CHART -
        //--------------

        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

        var areaChartData = {
            labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                label               : 'Digital Goods',
                backgroundColor     : 'rgba(60,141,188,0.9)',
                borderColor         : 'rgba(60,141,188,0.8)',
                pointRadius          : false,
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data                : [28, 48, 40, 19, 86, 27, 90]
                },
                {
                label               : 'Electronics',
                backgroundColor     : 'rgba(210, 214, 222, 1)',
                borderColor         : 'rgba(210, 214, 222, 1)',
                pointRadius         : false,
                pointColor          : 'rgba(210, 214, 222, 1)',
                pointStrokeColor    : '#c1c7d1',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(220,220,220,1)',
                data                : [65, 59, 80, 81, 56, 55, 40]
                },
            ]
        }

        var areaChartOptions = {
            maintainAspectRatio : false,
            responsive : true,
            legend: {
                display: false
            },
            scales: {
                xAxes: [{
                gridLines : {
                    display : false,
                }
                }],
                yAxes: [{
                gridLines : {
                    display : false,
                }
                }]
            }
        }

        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas, { 
            type: 'line',
            data: areaChartData, 
            options: areaChartOptions
        })
    })
</script>