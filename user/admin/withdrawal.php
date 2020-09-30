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
                                        <i class="pe-7s-cash icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Withdrawal Section
                                        <div class="page-title-subheading">This is where you save your withdrawal details. Note that earnings are paid automatically and you do not need to manually request for withdrawals.
                                        </div>
                                    </div>
                                </div>
                                  </div>
                        </div>         

                        <!-- Main content -->
                        <section class="content">
                          <div class="container-fluid">
                            <!-- Main row -->
                            <div class="row">

  <div class="col-md-6">
                                     <div class="">
                                        <div class="card mb-3 widget-content bg-midnight-bloom">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Account Balance</div>
                                                    <div class="widget-subheading">Earnings from links</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>$1896</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="card mb-3 widget-content bg-arielle-smile">
                                            <div class="widget-content-wrapper text-white">
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Affiliate Balance</div>
                                                    <div class="widget-subheading">Earnings from referrals</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="widget-numbers text-white"><span>$2509</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </div>


                                <div class="col-md-6" id="manual">
                                    <div class="card">
                                      <div class="card-body"><h5 class="card-title">Withdrawal</h5>
                                                <form class="">
                                                     <div class="position-relative form-group"><label for="type" class="">Withdrawal Type</label><select name="type" id="type" class="form-control">
                                                        <option value="1">Paypal</option>
                                                        <option value="2">Bitcoins</option>
                                                    </select></div>

                                                    <div class="position-relative form-group"><label for="amount" class="">Withdrawal Amount</label><input name="amount" id="amount" placeholder="500" type="number" class="form-control" required=""></div>
                                                    <div class="position-relative form-group"><label for="address" class="">Withdrawal Address</label><input name="address" id="address" placeholder="Paypal email address" type="text" class="form-control" required=""></div>
                                                   
                                              
                                                   
                                                    <button class="mt-1 btn btn-primary">Save</button>
                                                </form>
                                            </div>
                                    </div>
                                </div>



                            </div>
                            <!-- /.row (main row) -->
                            <div class="row my-5">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Withdrawal History
                                        <div class="btn-actions-pane-right">
                                            
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover"  style="min-width: 500px; overflow: scroll;">
                                            <thead>
                                            <tr>
                                                <th class="text-center">Date</th>
                                                <th class="text-center">Type</th>
                                                <th class="text-center">Address</th>
                                                <th class="text-center">Approval Status</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="text-center text-muted">24-03-2020</td>
                                                <td class="text-center text-muted">Paypal</td>
                                                <td class="text-center text-muted">example@gmail.com</td>
                                                <td class="text-center text-muted">Paid</td>
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
                          </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->
                   