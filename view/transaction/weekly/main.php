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
      <h4 class="page-head-line">WEEKLY ACCOMPLISHMENT REPORT</h4>
      <div class="panel-body">

      
          <div class="row">
            

         <div class="col-xs-6"></div> <!--empty space-->



       </div>
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
                   <small>WEEKLY ACCOMPLISHMENT REPORT</small>
                 </h1>                              
               </section>
               <hr style="border: 0.5px solid #f00">  

               <!-- Main content -->
               <section class="content">



                <div class="row" >              
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">     
                        <div class="row" >


             </div><!--/.row-->

             <div class="row" style="margin-top:25px">
                <div class="col-sm-6 col-xs-12">
                  <table id="ActTable" class="table table-condensed table-bordered table-hover table-striped" >
                    <thead>
                      <th>Work Description</th>                         
                      <th>Unit</th>                         
                      <th>Quantity</th>     
                      <th>Unit Cost</th>    
                      <th>Amount</th>     
                      <th>Weight</th>           
                    </thead>

                    <tbody></tbody>            
                  </table> 
                </div> <!-- /. col --> 
              </div>

             <h1>

              <small>ACCOMPLISHMENT (QUANTITY)</small>
            </h1>   
            <hr style="border: 0.5px solid #f00">  
            <div class="row" >              
              <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="box box-solid">
                  <div class="box-header">     
       

               </div><!--/.row-->
               <div class="row" style="margin-top:25px">
                <div class="col-sm-6 col-xs-12">
                  <table id="ActTable" class="table table-condensed table-bordered table-hover table-striped" >
                    <thead>
                      <th>Previous</th>                         
                      <th>This period</th>                         
                      <th>To date</th>     
                                
                    </thead>

                    <tbody></tbody>            
                  </table> 
                </div> <!-- /. col --> 
              </div>


               <h1>

                <small>AMOUNT</small>
              </h1>   
              <hr style="border: 0.5px solid #f00">  
              <div class="row" >              
             

              

               </div><!--/.row-->
               <div class="row" style="margin-top:25px">
                <div class="col-sm-6 col-xs-12">
                  <table id="ActTable" class="table table-condensed table-bordered table-hover table-striped" >
                    <thead>
                      <th>Previous</th>                         
                      <th>This period</th>                         
                      <th>To date</th>     
                      <th>Weight Accomplished</th>    
                                
                    </thead>

                    <tbody></tbody>            
                  </table> 
                </div> <!-- /. col --> 
              </div>

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

</div>
</div>
</section>
<div class="col-md-2 col-xs-12"><br><button onclick="window.location.href='../../../view/transaction/PM/main.php'" id="btn_reset" class="btn btn-block btn-danger btn-lg">Cancel</button></div>
<div class="col-md-2 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-primary btn-lg">Reset</button></div>

<div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
</div>
<script src="../../../controller/steps-contract.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>


