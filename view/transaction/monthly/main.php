<<<<<<< HEAD
<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


  if($_SESSION["persan_user_name"]=="" || $_SESSION["persan_user_type"]=="")
  {?>
    <script type="text/javascript">
      function Redirect()
      {
        window.location="view/master/login.php";
       // alert("Please Log-in");
      }
      Redirect();
    </script>
  <?php }
  else{
  $persan_user_name = $_SESSION["persan_user_name"];
  $persan_user_type = $_SESSION["persan_user_type"];
  echo'<input type="hidden" id="persan_user_type" value="'.$persan_user_type.'">';
  }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>


<?php include("../../../view/master/design_sidebar.php");//header and design ?>

<!--**********************************-->
                   <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Monthly Accomplishment Report</h4>
                    </div>
                    </div>

                    </div>
            </div>




            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">

                  <div class="x_content">

                    <form class="form-horizontal form-label-left" novalidate>




                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Name <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <!--  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="select"> -->
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Name-</option>
                        </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Project Code <span class="required">*</span>
                        </label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <!--  <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="both name(s) e.g Jon Doe" required="required" type="select"> -->
                        <select id="heard" class="form-control" required="">
                          <option selected="selected" value="none">-Select Project Code-</option>
                        </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day">Project Location <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="text" id="day" name="day" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day">Agency/Client Name <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="text" id="day" name="day" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Contract Period <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Accomplishment Cut-off Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Start Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Target Completion Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Activities Accomplished for the Month: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Problems Encountered: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Actions Taken: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Major Activites Next Month: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Materials Needed: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Remarks: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>


                       <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>


<?php include("../../../view/master/design_end.html");//?>

=======
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
                    <h4 class="page-head-line">MONTHLY ACCOMPLISHMENT REPORT</h4>
                        <div class="panel-body">
                          <div class="row">
                        <div class="col-sm-1 col-xs-2">                        
                          <h4 class="box-title" style="margin-left:13px">
                               <a href="#" onclick="return confirmCancel()" role="button" data-toggle='tooltip' title="Cancel" data-placement='bottom' class="btn text-red"
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white"> <i class="ion-android-close"></i> </a>                               
                          </h4>     
                        </div> 

                        <div class="col-sm-1 col-xs-2">
                          <h4 class="box-title">
                               <button role="button" data-toggle='tooltip' title="Save Record" data-placement='bottom' class="btn text-green"
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white; " disabled > <i class="ion-android-done"></i> </button>                               
                          </h4>                             
                        </div>      
                                           
                        <div class="col-xs-6"></div> <!--empty space-->

                        

                      </div>

<div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
<div class="wrapper">
      
      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Report
            <small>MONTHLY ACCOMPLISHMENT REPORT</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

         

          <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  
                  <h1>
           
            <small>Cost Details</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Project Cost :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Cost Change :</label>
                      <div class="input-group" style="margin-top:3px">
                      <span class="input-group-addon">₱</span>
                       <input type="number"  placeholder=" Search Name ">
                       
                      </div>    
                       
                       <input type="radio"  value="male"> Addition<br>
                       <input type="radio"  value="male"> Deduction<br>
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Total Project Cost :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                  </div><!--/.row-->

                  <h1>
           
            <small>Project Expenditures</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Projected :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12" >
                      <label><font color="darkred">*</font>Actual :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Variance (+/-) :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">₱</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                    
                    </div> <!-- /.col-->  <!--Customer Field-->

                  </div><!--/.row-->

                       <h1>
           
            <small>Percentage Accomplishment</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Schedule :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Actual :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Variance (+/-) :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">%</i></span>
                       <input type="number" placeholder=" Search Name ">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               



                  </div><!--/.row-->


                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Equivalent in days :</label>
                      <div class="input-group" style="margin-top:3px">
                        <input type="radio"> ahead :<br>
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                      <div class="input-group" style="margin-top:3px">
                        <input type="radio"> delay :<br>
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                    </div> <!-- /.col-->  <!--Customer Field-->

                      

                  </div><!--/.row-->

                  <h1>
           
            <small>Project Duration</small>
          </h1>   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Contract :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Completed :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Remaining :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               
                    <div class="col-md-3 col-xs-12">
                      <label><font color="darkred">*</font>Granted time extension :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon">days</i></span>
                       <input type="number" placeholder=" Search Name ">

                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->



                 

                    <!-- address rows -->
                    <div class="row"  style="margin-top:25px">
                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Activities Accomplished for the Month :</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Problems Encountered:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                      
                      <div class="col-md-3 col-xs-12">
                        <label ><font color="darkred">*</font>Actions Taken:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                      </div>
                       <div class="row"  style="margin-top:25px">
                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Major Activities Next Month:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                   

                   
                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Materials Needed:</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                      <div class="col-md-3 col-xs-12">
                        <label><font color="darkred">*</font>Remarks :</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                  </div> <!-- /. row -->

                  

                <hr>
                <!--TABLES -->

   
                        </div>
                        <div class="panel-body">

              </div>
              </div>
              </div><!--//
window.location='../../transaction/steps/main.php
                2nd panel body-->

              </div>
              </div>
              </div><!--//first panel body-->

              </div>
            </section>
          </div>
        </div>
      </div>
   <script src="../../../controller/steps-contract.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>
<<<<<<< HEAD
<script type="text/javascript">
$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" style="margin-bottom:20px;">-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

</script>
>>>>>>> bb011c4b92dfb47bca6dff77c947faba64f36333
=======

>>>>>>> mobile
</body>
</html>


