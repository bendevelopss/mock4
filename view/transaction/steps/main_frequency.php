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
                    <h4 class="page-head-line">Add More Info</h4>
                        <div class="panel-body">


<div id="step-2">
            <h2 class="StepTitle">Add subcontractor</h2>
            <p>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="op-mgr">Operations Manager <span class="required">*</span>
              </label>
              <input type="text" id="op-mgr" required="required" class="form-control col-md-7 col-xs-12">
            <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-engr">Project Engineer/Field Engineer <span class="required">*</span>
            </label>
            <input type="text" id="proj-engr" required="required" class="form-control col-md-7 col-xs-12">
           <br>

           <label class="control-label col-md-24 col-sm-12 col-xs-12" for="mtrl-engr">Materials Engineer <span class="required">*</span>
           </label>
           <input type="text" id="mtrl-engr" required="required" class="form-control col-md-7 col-xs-12">
          <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="foreman">Foreman <span class="required">*</span>
          </label>
          <input type="text" id="foreman" required="required" class="form-control col-md-7 col-xs-12">
         <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="wrh-in-charge">Warehouse-in-Charge <span class="required">*</span>
          </label>
          <input type="text" id="wrh-in-charge" required="required" class="form-control col-md-7 col-xs-12">
         <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="eqpt-in-charge">Equipment-in-Charge <span class="required">*</span>
          </label>
          <input type="text" id="eqpt-in-charge" required="required" class="form-control col-md-7 col-xs-12">
         <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="safety-officer">Safety Officer <span class="required">*</span>
        </label>
        <input type="text" id="safety-officer" required="required" class="form-control col-md-7 col-xs-12">
         <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="timekeeper">Timekeeper <span class="required">*</span>
        </label>
        <input type="text" id="timekeeper" required="required" class="form-control col-md-7 col-xs-12">
         <br>
         <br>
         <br>


        </div>
        <div id="step-3">
            <h2 class="StepTitle">Add Consultant</h2>
            <p>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="op-mgr">Operations Manager <span class="required">*</span>
              </label>
              <input type="text" id="op-mgr" required="required" class="form-control col-md-7 col-xs-12">
            <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-engr">Project Engineer/Field Engineer <span class="required">*</span>
            </label>
            <input type="text" id="proj-engr" required="required" class="form-control col-md-7 col-xs-12">
           <br>

           <label class="control-label col-md-24 col-sm-12 col-xs-12" for="mtrl-engr">Materials Engineer <span class="required">*</span>
           </label>
           <input type="text" id="mtrl-engr" required="required" class="form-control col-md-7 col-xs-12">
          <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="foreman">Foreman <span class="required">*</span>
          </label>
          <input type="text" id="foreman" required="required" class="form-control col-md-7 col-xs-12">
         <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="wrh-in-charge">Warehouse-in-Charge <span class="required">*</span>
          </label>
          <input type="text" id="wrh-in-charge" required="required" class="form-control col-md-7 col-xs-12">
         <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="eqpt-in-charge">Equipment-in-Charge <span class="required">*</span>
          </label>
          <input type="text" id="eqpt-in-charge" required="required" class="form-control col-md-7 col-xs-12">
         <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="safety-officer">Safety Officer <span class="required">*</span>
        </label>
        <input type="text" id="safety-officer" required="required" class="form-control col-md-7 col-xs-12">
         <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="timekeeper">Timekeeper <span class="required">*</span>
        </label>
        <input type="text" id="timekeeper" required="required" class="form-control col-md-7 col-xs-12">
         <br>


            <div class="col-md-2 "><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>             

            <div class="col-md-4" >  <br><button id="btn_save" class="btn btn-block btn-success btn-lg" onclick="window.location='../../transaction/steps/main_team.php';">Next</button></div>

            </p>

        </div>

                    </div>
              </div>
              </div><!--//first panel body-->


<!--    <script src="../../../controller/steps.js" type="text/javascript"></script>-->
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
