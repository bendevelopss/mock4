<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>
<div class="se-pre-con"></div>

<?php include("../../../view/master/design_sidebar.php");//header and design ?>

<!--**********************************-->
                   <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Employee</h4>
                    </div>
                    </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" onclick="reset();">
                              Add New Record
                            </button>
                            <td width="200"><a target="_blank" href="export.php" class="btn btn-danger">Daily</a></td>
                            <td width="200"><a target="_blank" href="export2.php" class="btn btn-primary">Monthly</a></td>
                            <td width="200"><a target="_blank" href="export3.php" class="btn btn-danger">Work</a></td>
                            <td width="200"><a target="_blank" href="export4.php" class="btn btn-primary">Work Sched</a></td>
                            <td width="200"><a target="_blank" href="export5.php" class="btn btn-danger">Project Info</a></td>
                            <td width="200"><a target="_blank" href="export6.php" class="btn btn-primary">Safety</a></td>
                            <td width="200"><a target="_blank" href="export7.php" class="btn btn-danger">Photograph</a></td>
                            <td width="200"><a target="_blank" href="export8.php" class="btn btn-success">Completion</a></td>
                            <td width="200"><a target="_blank" href="export9.php" class="btn btn-danger">Customer</a></td>
                            <td width="200"><a target="_blank" href="export10.php" class="btn btn-success">Turnover</a></td>
                            <td width="200"><a target="_blank" href="export11.php" class="btn btn-danger">Weekly</a></td>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">Employee Form </h4>
                                        </div>
                                        <div class="modal-body">
                                           <?php include('main_form.html'); ?>
                                        </div>
                                        
                                         <div class="col-md-2 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>
                                         
                                         <div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
                                         <div class="modal-footer">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                     <!-- End Modals-->
<!--**********************************-->


          

            <div class="row">


                 <!--   LABOR POPULATE TABLE -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="table_main" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Job</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- End  LABOR POPULATE TABLE -->
</div>

    <script src="../../../controller/employee.js" type="text/javascript"></script>

<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

<!---->
