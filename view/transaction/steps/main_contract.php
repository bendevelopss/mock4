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
                    <h4 class="page-head-line">Contract</h4>
                        <div class="panel-body">
<div class="row" >
                    <div class="col-md-6 col-sm-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                         <h4> Contract Form </h4>
                        </div>
                        <div class="panel-body">

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-name">Contract ID<span class="required">*</span>
          </label>
          <div id="cont_id_div">
             
            
        <div class="col-sm-6">
              <input type="text" id="cont_id" required="required" class="form-control col-xs-4 col-md-7 col-xs-4">
             
        </div>
          </div>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-name">User<span class="required">*</span>
          </label>
                           
          <div class="form-group">
          <div class="col-sm-6">
          <input type="text" id="user_id" required="required" value='<?=$_SESSION["user_id"];?>'  class="form-control col-xs-4 col-md-7 col-xs-4" disabled >
          </div>
          </div>
          <br><br>

              <label class="control-label col-md-24 col-sm-12 col-xs-12">Client<span class="required">*</span></label>
              <div id="client_div">

              
              <div class="col-sm-6">
              <select id="client" class="form-control" required="">
              <option value="">Select..</option>
            </select>
          </div>
          </div>


          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Reference Number<span class="required">*</span>
          </label>
          <div id="cont_ref_div">

    
          <div class="col-sm-6">
          <input type="text" id="cont_ref" required="required" class="form-control col-md-7 col-xs-12">
          </div>

          <br><br>

          </div>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-code">Contract Name
          <span class="required">*</span>
          </label>
          <div id="cont_name_div">

              
          <div class="col-sm-6">
          <input type="text" id="cont_name" required="required" class="form-control col-md-7 col-xs-12">
          </div>

          <br><br>
           
           </div>

           
           <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Day <span class="required">*</span>
          </label>
           <div id="cont_day_div">
            
              
           <div class="col-sm-6">
           <input type="number" id="cont_day" required="required" class="form-control col-md-7 col-xs-12">
           </div>
           </div>


           <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Start <span class="required">*</span>
           </label>
           <div id="cont_start_div">
           
           <div class="col-sm-6">
             <input type="date" id="cont_start" required="required" class="form-control col-md-7 col-xs-12">
             
           </div>
           </div>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Amount <span class="required">*</span>
          </label>
          <div id="cont_amount_div">
            
          <div class="col-sm-6">
          <input type="number" id="cont_amount" required="required" class="form-control col-md-7 col-xs-12">
            
          </div>
          </div>

          <div class="col-sm-6">
             <input type="hidden" id="user_id-hide" required="required" value='<?=$_SESSION["user_id"];?>' class="form-controlcol-xs-12 col-md-7 col-xs-12">
          </div>
             
            <div class="col-md-8 "><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>

            <div class="col-md-8" >  <br><button id="btn_save" class="btn btn-block btn-success btn-lg" onclick="return saves();">Save & Proceed</button></div><!--?php $_SESSION['clients']='hi';-->
          </div>
        </div>



              </div>
              </div>
              </div>

              </div>
              </div>
              </div>


   <script src="../../../controller/steps-contract.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
