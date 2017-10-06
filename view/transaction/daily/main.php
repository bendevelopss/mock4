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
      <h4 class="page-head-line">DAILY ACCOMPLISHMENT REPORT</h4>
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
                      <h1>
                       Report
                       <small>DAILY ACCOMPLISHMENT REPORT</small>
                     </h1>   
                     <hr style="border: 0.5px solid #f00">                             
                   </section>

                   <!---------------------------modal start------------------------------------------>

                   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">Activity </h4>
                        </div>
                        <div class="modal-body">

                          <div class="row" style="margin-bottom:5px"> <!-- ROW 1 -->


                           <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Part</label> <!-- Category -->
                            <input type="text" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Item</label> <!-- Category -->
                            <input type="text" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                            <label><font color="darkred">*</font>Name</label> <!-- Category -->
                            <input type="text" class="form-control input-lg" id="f_name" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_job_div" class='form-group'>
                            <label><font color="darkred">*</font>Qty</label> <!-- Category -->
                            <input type="text" class="form-control input-lg" id="f_job" required>
                          </div>








                        </div> <!-- /.row -->

                      </div>

                      <div class="col-md-2 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>

                      <div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
                      <div class="modal-footer">
                      </div>
                    </div>
                  </div>
                </div>
                //activities
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Manpower</h4>
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
               //manpower
               <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      <h4 class="modal-title" id="myModalLabel">Used</h4>
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
             //used
             <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Receive</h4>
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
           //recieve                            


           <!--------------------------modal end------------------------------------------>
           <!-- Main content -->
           <section class="content">



            <div class="row" >              
              <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="box box-solid">
                  <div class="box-header">     
                    <div class="row" style="margin-top:25px">


                      <div class="col-md-3 col-xs-12" >
                        <label id="transdateErr" ><font color="darkred">*</font>Order Date :</label>    
                        <div class="input-group" style="margin-top:3px">
                         <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                         <input id="transdate" value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                       </div>    
                     </div> <!-- /.col-->  

                     <div class="col-md-3 col-xs-12" >
                      <label id="transdateErr" ><font color="darkred">*</font>Order Day :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                       <input id="transdate" value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                     </div>    
                   </div> <!-- /.col-->  


                 </div><!--/.row-->


                 <hr style="border: 0.5px solid #f00">  
                 <div class="row" style="margin-top:25px">



                  <div class="col-sm-1 col-xs-2">
                    <h4 class="box-title">
                     <button id="btn_save" data-target="#myModal" data-toggle='modal' title="Save Record" data-placement='bottom' class="btn text-green" onclick="reset();" 
                     style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                     text-align: center; font-size:25px; background-color:white; "  >+ </button>                               
                   </h4>                            
                 </div>    
               </div><!--/.row-->



               <h1>

                <small>Work Performed Today</small>
              </h1>   

              <div class="row" style="margin-top:25px">
                <div class="col-sm-6 col-xs-12">
                  <table id="ActTable" class="table table-condensed table-bordered table-hover table-striped" >
                    <thead>
                      <th>Activities</th>                         
                      <th>Station</th>                         
                      <th>Volume</th>                         
                    </thead>

                    <tbody></tbody>            
                  </table> 
                </div> <!-- /. col --> 
              </div>
              <hr style="border: 0.5px solid #f00">  
              <div class="row" style="margin-top:25px">

                <div class="col-md-3 col-xs-12">
                  <label id="custnameErr" ><font color="darkred">*</font>Weather :</label>
                  <div class="input-group" style="margin-top:3px">
                   <span class="input-group-addon">AM</i></span>
                   <input type="text" >
                 </div>    

                 <div class="input-group" style="margin-top:3px">
                   <span class="input-group-addon">PM</i></span>
                   <input type="text" >
                 </div>  
               </div> <!-- /.col-->  <!--Customer Field-->

               <div class="col-md-3 col-xs-12" >
                <label id="transdateErr" ><font color="darkred">*</font>Toolbox Meeting Conducted ?</label>    
                <div class="input-group" style="margin-top:3px">

                  <input type="radio"> Yes
                  <br>
                  <input type="radio"> No
                </div>    
              </div> <!-- /.col-->  






            </div><!--/.row-->
            <hr style="border: 0.5px solid #f00">  
            <div class="row" style="margin-top:25px">



              <div class="col-sm-1 col-xs-2">
                <h4 class="box-title">
                 <button id="btn_save"  class="btn text-green" data-toggle="modal" data-target="#myModal1" onclick="reset();" 
                 style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                 text-align: center; font-size:25px; background-color:white; "  >+</button>                            
               </h4>                            
             </div>    
           </div><!--/.row-->


           <div class="row" style="margin-top:25px">
            <div class="col-sm-4 col-xs-12">
              <table id="manTable" class="table table-condensed table-bordered table-hover table-striped" >
                <thead>
                  <th style="width:180px">Manpower</th>
                  <th></th>                         
                </thead>                            
                <tbody>
                </tbody>            
              </table> 
            </div> <!-- /. col --> 
          </div>

          <div class="row" style="margin-top:25px">

           <hr style="border: 0.5px solid #f00">  

           <div class="col-sm-1 col-xs-2">
            <h4 class="box-title">
             <button id="btn_save" data-toggle="modal" data-target="#myModal2"  class="btn text-green" onclick="reset();" 
             style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
             text-align: center; font-size:25px; background-color:white; "> <i class="ion-android-done"></i>+</button>                            
           </h4>                            
         </div>    
       </div><!--/.row-->
       <div class="row" style="margin-top:25px">
        <div class="col-lg-6 col-xs-12">
          <table id="useTable" class="table table-condensed table-bordered table-hover table-striped" >
            <thead>
              <th  style="width:550px">Materials/Lubricants/Fuel Used</th>
              <th  style="width:180px">Quantity</th>    
              
            </thead>


            <tbody></tbody>            
          </table> 
        </div> <!-- /. col --> 
      </div>

      <div class="row" style="margin-top:25px">

       <hr style="border: 0.5px solid #f00">  

       <div class="col-sm-1 col-xs-2">
        <h4 class="box-title">
         <button id="btn_save" data-toggle="modal" data-target="#myModal2"  class="btn text-green" onclick="reset();" 
         style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
         text-align: center; font-size:25px; background-color:white; "> <i class="ion-android-done"></i>+</button>                            
       </h4>                            
     </div>    
   </div><!--/.row-->
   <div class="row" style="margin-top:25px">
    <div class="col-lg-5 col-xs-12">
      <table id="useTable" class="table table-condensed table-bordered table-hover table-striped" >
        <thead>
          
          <th  style="width:180px">Equipment Used</th> 
          <th  style="width:180px">Utilization</th>                      
        </thead>


        <tbody></tbody>            
      </table> 
    </div> <!-- /. col --> 
  </div>

</div> <!-- /.col-->  <!--Customer Field-->           
<hr style="border: 0.5px solid #f00">  
<div class="row" style="margin-top:25px">



  <div class="col-sm-1 col-xs-2">
    <h4 class="box-title">
     <button id="btn_save" data-toggle="modal" data-target="#myModal3"  class="btn text-green" onclick="reset();" 
     style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none ;
     text-align: center; font-size:25px; background-color:white; "> <i class="ion-android-done"></i>+</button>                            
   </h4>                            
 </div>    
</div><!--/.row-->
<div class="row" style="margin-top:25px">
  <div class="col-lg-6 col-xs-12">
    <table id="recTable" class="table table-condensed table-bordered table-hover table-striped" >
      <thead>
        <th  style="width:550px">Materials/Equipment/Documents Received</th>
        <th  style="width:180px">Quantity</th>    

      </thead>

      <tbody></tbody>            
    </table> 
  </div> <!-- /. col --> 
</div>
</div> <!-- /.col-->  <!--Customer Field-->           
</div>
<hr style="border: 0.5px solid #f00">  

<div class="col-sm-1 col-xs-2">

</div>    
</div><!--/.row-->

<!-- address rows -->
<div class="row"  style="margin-top:25px" id="pickupDiv">
  <div class="col-md-3 col-xs-12">
    <label id="pickupErr" ><font color="darkred">*</font>Problems Encountered :</label>     
    <textarea id="pickup" rows="2" class="form-control" style="resize:none"></textarea>
  </div> <!--/. col -->


  <div class="col-md-3 col-xs-12" id="deliveryDiv">
    <label id="deliveryErr" ><font color="darkred">*</font>Visitors :</label>     
    <textarea id="delivery" rows="2" class="form-control" style="resize:none"></textarea>
  </div> <!--/. -->


</div> <!-- /. row -->

<div class="row"  style="margin-top:25px" id="pickupDiv">
  <div class="col-md-3 col-xs-12" id="custnameDiv">
    <label id="custnameErr" ><font color="darkred">*</font>Prepared by :</label>
    <div class="input-group" style="margin-top:3px">
     <span class="input-group-addon"><i class="fa fa-user"></i></span>
     <input type="text"> 
   </div>   
   <div class="input-group" style="margin-top:3px">


   </div>    

   <input type='hidden' id="chkCust" value="no-match">
 </div>

 <div class="col-md-3 col-xs-12" id="custnameDiv">
  <label id="custnameErr" ><font color="darkred">*</font>Approved by :</label>
  <div class="input-group" style="margin-top:3px">
    <span class="input-group-addon"><i class="fa fa-user"></i></span>
    <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false">
  </div>   
  <div class="input-group" style="margin-top:3px">


  </div>    

  <input type='hidden' id="chkCust" value="no-match">
</div>


</div> <!-- /. row -->



</div> <!--/.row-->


<hr>
<!--TABLES -->




</div>
<div class="col-md-2 col-xs-12"><br><button onclick="window.location.href='../../../view/transaction/PM/main.php'" id="btn_reset" class="btn btn-block btn-danger btn-lg">Cancel</button></div>
<div class="col-md-2 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-primary btn-lg">Reset</button></div>

<div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
              <!--//
window.location='../../transaction/steps/main.php
2nd panel body-->




</div>

</section>


</div>
</div>
</div>
<script src="../../../controller/daily.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>
</body>
</html>


