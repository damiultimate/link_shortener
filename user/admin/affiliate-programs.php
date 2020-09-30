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
                                        <i class="pe-7s-rocket icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Affiliate Program
                                        <div class="page-title-subheading">This is an example dashboard created using build-in elements and components.
                                        </div>
                                    </div>
                                </div>
                                 </div>
                        </div> 



<div class="row">
                            <div class="col-md-4 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Visits</div>
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
                                            <div class="widget-heading">Signups</div>
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
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span>$456</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>




                        <div class="card">
                            <div class="card-body">
                                <h2 class="h2 card-title text-center d-block">Your Affiliate Link</h2>
                                <p class="text-center">You have introduced a total of 100 affiliates</p>
                                <form action="#">
                                    <div class="row p-5">
                                        <div class="col-md-9" style="margin-bottom: 10px;">
                                            <input type="url" disabled name="" value="https:/www.abc.xyz" class="form-control input-lg" id="">
                                        </div>
                                        <div class="col-md-3">
                                            <button class="btn btn-primary btn-lg btn-block">Copy</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <br><br>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Invites</h5>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Username</th>
                                            <th>Earnings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Person One</td>
                                            <td>$50</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Person Two</td>
                                            <td>$50</td>

                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Person Three</td>
                                            <td>$50</td>

                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Person Four</td>
                                            <td>$50</td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                   