<?php include('../../../controller/master/log.php');?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<body>


<?php include("../../../view/master/design_sidebar.php");//header and design ?>

<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">



<body>
<div class="se-pre-con"></div>

                <!--**********************************-->
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">MONTHLY WORK SCHEDULE</h4>
                        <div class="panel-body">
                          <div class="row">
                       
                                           
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
          <h1 style="font-size: 18pt">
           Material Requirements
            
          </h1>            
          <hr style="border: 0.5px solid #f00">                    
        </section>


        <!-- Main content -->
        <section class="content">

         
          
          <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                   
                  
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Item Number :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->

                  <h1>
           
            <small>Material Quantity Required</small>
          </h1>   
                  <hr style="border: 0.5px solid #f00">  
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Balance :</label>
                      <div class="input-group" style="margin-top:3px">
                      
                       <input type="number" >
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12" >
                      <label><font color="darkred">*</font>Projected :</label>
                      <div class="input-group" style="margin-top:3px">
                      
                       <input type="number" >
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                   

                  </div><!--/.row-->


                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Work Description :</label>
                      <div class="input-group" style="margin-top:3px">
                      
                       <input type="text">
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12" >
                      <label><font color="darkred">*</font>Duration :</label>
                      <div class="input-group" style="margin-top:3px">
                      
                       <input type="text">
                      </div>    
                     
                    </div> <!-- /.col-->  <!--Customer Field-->

                    

                  </div><!--/.row-->

                       <h1>
           
            <small>Weekly Schedule</small>
          </h1>  
                  <hr style="border: 0.5px solid #f00">   
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 1 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >

                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 2 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 3 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 4 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               
                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 5 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->

                    <h1 style="font-size: 18pt">Equipment Requirements</h1>
                    <hr style="border: 0.5px solid #f00">  
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Description :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="text" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Quantity :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                      <div class="col-md-3 col-xs-12" >
                      <label id="custnameErr" ><font color="darkred">*</font>Estimated Duration :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="text" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->



                  </div><!--/.row-->

                  <h1>
           
            <small>Schedule</small>
          </h1>   
                    <hr style="border: 0.5px solid #f00">  
                    <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 1 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >

                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 2 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 3 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 4 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               
                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 5 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->

                  <h1 style="font-size: 19pt">
           Manpower Requirements
          </h1>   
                  <hr style="border: 0.5px solid #f00">  
                    <div class="row" style="margin-right:25px">

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 1 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >

                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                      <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 2 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 3 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 4 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->
               
                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Week 5 :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="number" >
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->
                 
                  
                    <div class="row" style="margin-top:25px">

                      <div class="col-md-3 col-lg-5">
                        <label><font color="darkred">*</font>Remarks :</label>     
                        <textarea rows="4" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->
                      
                    </div> <!-- /.col-->  <!--Customer Field-->


                  </div><!--/.row-->
                  

                    <div class="row" style="margin-top:25px">

                     <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Prepared by :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="text">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12">
                      <label id="custnameErr" ><font color="darkred">*</font>Approved by :</label>
                      <div class="input-group" style="margin-top:3px">
                       
                       <input type="text">
                      </div>    
                      
                    </div> <!-- /.col-->  <!--Customer Field-->

                  </div><!--/.row-->

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
            <div class="col-md-2 col-xs-12"><br><button onclick="window.location.href='../../../view/transaction/PM/main.php'" id="btn_reset" class="btn btn-block btn-danger btn-lg">Cancel</button></div>
                <div class="col-md-2 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-primary btn-lg">Reset</button></div>

                <div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>


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


