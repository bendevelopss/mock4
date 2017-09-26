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
                    <h4 class="page-head-line">My Projects</h4>
                            <div class="panel-body">


                        <div class="table-responsive">
                            <table id="table_main" class="table table-striped table-bordered table-hover">
                                <thead>
                          <tr>
                          <th style="width: 1%">ID</th>
                          <th style="width: 20%">Project Name</th>
                          <th>Team Members</th>
                          <th>Project Progress</th>
                          <th>Schedule</th>
                          <th style="width: 20%">#Action</th>
                        </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>






                        </div>
                </div>
            </div>

    <script src="../../../controller/project.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->
