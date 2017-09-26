<?php include('../../../controller/master/log.php');
?>

<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
    <!-- LOGO HEADER END-->
  <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project</h4>
                    </div>
                    </div>



                    <!-- start project list -->
                    <table id="table_main"  class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 10%">Contact ID</th>
                          <th style="width: 20%">Project Name</th>
                            <th>Project Progress</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                    <!-- end project list -->





    <script src="../../../controller/project.js" type="text/javascript"></script>

<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
