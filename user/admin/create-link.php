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
                                        <i class="pe-7s-link icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>Create Link
                                        <div class="page-title-subheading">This is where you can create a link you would like to earn from
                                        </div>
                                    </div>
                                </div>
                                  </div>
                        </div>       
                        <div class="card">
                            <div class="card-body">
                                <h2 class="h2 card-title text-center d-block">Shorten Link</h2>
                                <form action="#">
                                    <div class="row p-5">
                                        <div class="col-9">
                                            <input type="url" name="" placeholder="Paste a long link here" class="form-control input-lg" id="">
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-primary btn-lg btn-block">Shorten</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title text-center">Links</h5>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Link ID</th>
                                            <th>Link URL</th>
                                            <th>Views</th>
                                            <th>Leads</th>
                                            <th>Earnings</th>
                                            <th>Delete Link</th>
                                            <th>Edit Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>https://www.abc.xyz</td>
                                            <td>30</td>
                                            <td>20</td>
                                            <td>$15</td>
                                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                                            <td><button type="button" class="btn btn-warning">Edit</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
