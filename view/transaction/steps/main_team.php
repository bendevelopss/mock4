<?php include('../../../controller/master/log.php');
$v=$_GET["contract"]; 
?>
<input type="hidden" name="cont_id" value="<?=$v?>">
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
      <h4 class="page-head-line">Project Team</h4>
      <div class="panel-body">

        <div id="step-2">

          <p>

           <div class="col-md-6 col-xs-12">
            <div class="panel panel-default">
              <div class="panel-heading">

              </div>
              <div class="panel-body">
               Operations Manager <span class="required">*</span>
             </label>

             <div id="OM_div">
              <select id="OM" class="form-control" required="">
                <option value="">Select..</option>
              </select>
            </div>
            <br>

            Project Engineer/Field Engineer <span class="required">*</span>
            <div id="PI_div">
            <select id="PI" class="form-control" required="">
              <option value="">Select..</option>
            </select>
          </div>
            <br>
            <div id="Materials_div">
            Materials Engineer <span class="required">*</span>
            <select id="Materials" class="form-control" required="">
             <option value="">Select..</option>
           </select>
         </div>
           <br>

           Foreman <span class="required">*</span>
           <div id="Foreman_div">
           <select id="Foreman" class="form-control" required="">
            <option value="">Select..</option>
          </select>
        </div>
          <br>

          Warehouse-in-Charge <span class="required">*</span>
          <div id="Warehouse_div">
          <select id="Warehouse" class="form-control" required="">
            <option value="">Select..</option>
          </select>
        </div>
          <br>

          Equipment-in-Charge <span class="required">*</span>
          <div id="Equipment-in-Charge_div">
          <select id="Equipment-in-Charge" class="form-control" required="">
            <option value="">Select..</option>
          </select>
        </div>
          <br>
          Safety Officer <span class="required">*</span>
          <div id="Safety_div">
          <select id="Safety" class="form-control" required="">
            <option value="">Select..</option>
          </select>
        </div>
          <br>

          Timekeeper <span class="required">*</span>
        </label>
        <div id="Timekeeper_div">
        <select id="Timekeeper" class="form-control" required="">
          <option value="">Select..</option>
        </select>
      </div>
        <br>


        <div class="col-md-4 "><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>

        <div class="col-md-4" >  <br><button id="btn_save" class="btn btn-block btn-success btn-lg" onclick="saves1();">Next</button></div>

      </p>

    </div>
  </div>
</div><!--second panel-->
</div>
</div>
</div>
</div><!--//first panel body-->


<script src="../../../controller/steps-team.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
