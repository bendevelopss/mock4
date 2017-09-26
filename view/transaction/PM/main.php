<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>

<body>
<div class="se-pre-con"></div>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
     <!-- HEADER END-->
                <!--**********************************-->
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project Manager</h4>
                        <div class="panel-body">


                            <button class="btn btn-primary btn-lg" onclick="window.location='../../transaction/steps/main_contract.php';">
                              Create Contract
                            </button>
                            <div class="col-md-12">
                              <h4 class="page-head-line">My Contracts</h4>


                                                <!--pill tabs-->
                     <ul class="nav nav-pills">
                                <li class="active"><a href="#cat-pills" data-toggle="tab">Contract</a>
                                </li>
                                <li class=""><a href="#sub-pills" data-toggle="tab">Project</a>
                                       </li>
                            </ul>
                            <!-- pill-->
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="cat-pills">
                    <br />
                                    <h4>Contract</h4>
                        <div class="table-responsive">
                            <table id="table_main" class="table table-striped table-bordered table-hover">
                                <thead>
                          <tr>
                          <th style="width: 1%">ID</th>
                          <th style="width: 30%">Contract name</th>
                          <th style="width: 15%">Client</th>
                          <th style="width: 5%">Reference No.</th>
                          <th style="width: 5%">Contract Amount</th>
                          <th style="width: 20%">#Action</th>
                        </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="sub-pills"><br/>
                    <div class="table-responsive">
                            <table id="table_submain" class="table table-striped table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th style="width: 1%">Contract ID</th>
                                        <th style="width: 30%">Project Name</th>
                                        <th style="width: 15%">Team</th>
                                        <th style="width: 10%">Reports</th>


                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>









                        </div>
                        </div>
                </div>
            </div>


    <script src="../../../controller/project_edit.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->
