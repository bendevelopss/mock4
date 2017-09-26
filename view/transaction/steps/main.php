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
                    <h4 class="page-head-line">Project Manager</h4>
                        <div class="panel-body">

                      <div class="col-md-8 col-xs-10">
                        <div class="panel panel-default">
                        <div class="panel-heading">

                        </div>
                        <div class="panel-body">

                              <div id="step-1">
            <h2 class="StepTitle">Project Details</h2>

            <p><br>


            

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Reference Number<span class="required">*</span>
              </label>
              <input type="text"  required="required" disabled="disabled" value='<?=$_SESSION["name"];?>' class="form-control col-md-7 col-xs-12">
             <br><br>
           <div id="proj_code_div">
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-code">Project Code <span class="required">*</span>
              </label>
              <input type="text" id="proj_code" required="required" class="form-control col-md-7 col-xs-12">
             <br><br>
           </div><div id="proj_location_div">
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj_location">Project Location <span class="required">*</span>
              </label>
             <input type="text" id="proj_location" required="required" class="form-control col-md-7 col-xs-12">
             <br><br>
           </div>
              <label class="control-label col-md-24 col-sm-12 col-xs-12">Client</label>
              <input type="text"  required="required" disabled="disabled" value='<?=$_SESSION["clients"];?>' class="form-control col-md-7 col-xs-12">
              <br><br>
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Reference Number<span class="required">*</span>
              </label>
              <input type="text"  required="required" disabled="disabled" value='<?=$_SESSION["ref"];?>' class="form-control col-md-7 col-xs-12">
             <br><br>
             <div id="proj_ntp_div">
             <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj_location">Date Of NTP <span class="required">*</span>
             </label>
            <input type="date" id="proj_ntp" required="required" class="form-control col-md-7 col-xs-12">
            <br><br>
          </div><div id="proj_award_div">
          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="date-award">Date of Award <span class="required">*</span>
          </label>
          <input type="date" id="proj_award" required="required" class="form-control col-md-7 col-xs-12">
         <br><br></div>
       <div id="proj_target_div">
        <label class="control-label col-md-24 col-sm-12 col-xs-12"  for="date-target">Target Date <span class="required">*</span>
        </label>
        <input type="date" id="date_target" required="required"  class="form-control col-md-7 col-xs-12">
     </div>
      </div>
  <input type="hidden" id="proj_name" required="required" value='<?=$_SESSION["name"];?>' class="form-control col-md-7 col-xs-12">



<br><br><br>
            <div class="col-md-4 "><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>

            <div class="col-md-6" >  <br><button id="btn_save" class="btn btn-block btn-success btn-lg" onclick="return saves();">Save & Project Information</button></div>
              </div>
              </div>
              </div><!--//2nd panel body-->

              </div>
              </div>
              </div><!--//first panel body-->

 <script src="../../../controller/steps.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
