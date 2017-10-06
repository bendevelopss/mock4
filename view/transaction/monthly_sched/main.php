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
                       <h1>
                         Report
                         <small>MONTHLY WORK SCHEDULE</small>
                       </h1>   

                       

                     </section>

                     <!-- Start Modals-->
                     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel">Material </h4>
                          </div>
                          <div class="modal-body">

                            <div class="row" style="margin-bottom:5px"> <!-- ROW 1 -->


                             <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                              <label><font color="darkred">*</font>Item Number</label> <!-- Category -->
                               <select class="form-control input-lg" id='item_sel' required> 
                              <option value="none" ></option>
                              </select>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                              <label><font color="darkred">*</font>Balanced</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_ID" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                              <label><font color="darkred">*</font>Projected</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_name" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_job_div" class='form-group'>
                              <label><font color="darkred">*</font>Work Description</label> <!-- Category -->
                              <input type="text" class="form-control input-lg" id="f_job" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                              <label><font color="darkred">*</font>Duration</label> <!-- Category -->
                              <input type="text" class="form-control input-lg" id="f_ID" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                              <label><font color="darkred">*</font>Week 1</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_ID" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                              <label><font color="darkred">*</font>Week 2</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_ID" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                              <label><font color="darkred">*</font>Week 3</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_name" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                              <label><font color="darkred">*</font>Week 4</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_name" required>
                            </div>
                            <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                              <label><font color="darkred">*</font>Week 5</label> <!-- Category -->
                              <input type="number" class="form-control input-lg" id="f_name" required>
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
                  //material
                  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                          <h4 class="modal-title" id="myModalLabel">Equipment </h4>
                        </div>
                        <div class="modal-body">

                          <div class="row" style="margin-bottom:5px"> <!-- ROW 1 -->


                           <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Item Number</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Balanced</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                            <label><font color="darkred">*</font>Projected</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_name" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_job_div" class='form-group'>
                            <label><font color="darkred">*</font>Work Description</label> <!-- Category -->
                            <input type="text" class="form-control input-lg" id="f_job" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Duration</label> <!-- Category -->
                            <input type="text" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Week 1</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                            <label><font color="darkred">*</font>Week 2</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_ID" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                            <label><font color="darkred">*</font>Week 3</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_name" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                            <label><font color="darkred">*</font>Week 4</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_name" required>
                          </div>
                          <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                            <label><font color="darkred">*</font>Week 5</label> <!-- Category -->
                            <input type="number" class="form-control input-lg" id="f_name" required>
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
                //used
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title" id="myModalLabel">Manpower </h4>
                      </div>
                      <div class="modal-body">

                        <div class="row" style="margin-bottom:5px"> <!-- ROW 1 -->


                         <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                          <label><font color="darkred">*</font>Item Number</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_ID" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                          <label><font color="darkred">*</font>Balanced</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_ID" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                          <label><font color="darkred">*</font>Projected</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_name" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_job_div" class='form-group'>
                          <label><font color="darkred">*</font>Work Description</label> <!-- Category -->
                          <input type="text" class="form-control input-lg" id="f_job" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                          <label><font color="darkred">*</font>Duration</label> <!-- Category -->
                          <input type="text" class="form-control input-lg" id="f_ID" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                          <label><font color="darkred">*</font>Week 1</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_ID" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_ID_div" class='form-group'>
                          <label><font color="darkred">*</font>Week 2</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_ID" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                          <label><font color="darkred">*</font>Week 3</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_name" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                          <label><font color="darkred">*</font>Week 4</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_name" required>
                        </div>
                        <div class="col-sm-4 col-xs-12" id="f_name_div" class='form-group'>
                          <label><font color="darkred">*</font>Week 5</label> <!-- Category -->
                          <input type="number" class="form-control input-lg" id="f_name" required>
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
              //recieve                            
              <!--End Modals-->


              <!-- Main content -->
              <section class="content">

                <div class="col-md-2 col-xs-12"><br><button id="btn_save" data-target="#myModal" data-toggle='modal' title="Add Record" data-placement='bottom' onclick="reset();"  class="btn btn-primary btn-lg">Add</button></div>


                <div class="row" >              
                  <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="box box-solid">
                      <div class="box-header">     


                       <div class="row" style="margin-top:25px">
                        <div class="col-sm-6 col-lg-8">
                          <table id="matTable" class="table table-condensed table-bordered table-hover table-striped" >
                            <thead>
                              <th>Item Number</th>
                              <th>Balance</th>                         
                              <th>Projected</th>                         
                              <th>Work Description</th>     
                              <th>Duration</th>    
                              <th>Week 1</th>                         
                              <th>Week 2</th>                         
                              <th>Week 3</th>     
                              <th>Week 4</th>    
                              <th>Week 5</th>   
                              
                            </thead>

                            <tbody></tbody>            
                          </table> 
                        </div> <!-- /. col --> 
                      </div>
                      
                      
                      <div class="row" style="margin-top:25px">
                       
                      </div><!--/.row-->


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



                    <div class="row" style="margin-top:25px">
                      <div class="col-sm-6 col-xs-12">
                        <table id="ActTable" class="table table-condensed table-bordered table-hover table-striped" >
                          <thead>
                            
                            
                          </thead>

                          <tbody></tbody>            
                        </table> 
                      </div> <!-- /. col --> 
                    </div>

                    <h1 style="font-size: 18pt">Equipment Requirements</h1>
                    <hr style="border: 0.5px solid #f00">  
                    <div class="row" style="margin-top:25px">


                      <div class="col-md-2 col-xs-12"><br><button id="btn_save" data-target="#myModal1" data-toggle='modal' title="Add Record" data-placement='bottom' onclick="reset();"  class="btn btn-primary btn-lg">Add</button></div>



                    </div><!--/.row-->

                    <div class="row" style="margin-top:25px">
                      <div class="col-sm-6 col-lg-8">
                        <table id="eqtTable" class="table table-condensed table-bordered table-hover table-striped" >
                          <thead>
                            <th>Description</th>                         
                            <th>Quantity</th>                         
                            <th>Estimated Duration</th>     
                            <th>Week 1</th>                         
                            <th>Week 2</th>                         
                            <th>Week 3</th>     
                            <th>Week 4</th>    
                            <th>Week 5</th>   
                            
                          </thead>

                          <tbody></tbody>            
                        </table> 
                      </div> <!-- /. col --> 
                    </div>

                    

                    <h1 style="font-size: 19pt">
                     Manpower Requirements
                   </h1>   

                   <hr style="border: 0.5px solid #f00">  

                   <div class="row" style="margin-right:25px">

                    
                    <div class="col-md-2 col-xs-12"><br><button id="btn_save" data-target="#myModal3" data-toggle='modal' title="Add Record" data-placement='bottom' onclick="reset();"  class="btn btn-primary btn-lg">Add</button></div>

                  </div><!--/.row-->

                  <div class="row" style="margin-top:25px">
                    <div class="col-sm-6 col-lg-8">
                      <table id="labTable" class="table table-condensed table-bordered table-hover table-striped" >
                        <thead>
                          <th>Description</th>                         
                          <th>Quantity</th>                         
                          <th>Estimated Duration</th> 
                          <th>Week 1</th>                         
                          <th>Week 2</th>                         
                          <th>Week 3</th>     
                          <th>Week 4</th>    
                          <th>Week 5</th>     
                          
                        </thead>

                        <tbody></tbody>            
                      </table> 
                    </div> <!-- /. col --> 
                  </div>
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
     </div>

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
<script src="../../../controller/monthly_sched.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

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

</body>
</html>


