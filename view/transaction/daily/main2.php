<<<<<<< HEAD:view/transaction/daily/main2.php
<?php
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


?>
=======
<?php include('../../../controller/master/log.php');?>
<!---->
>>>>>>> bb011c4b92dfb47bca6dff77c947faba64f36333:view/transaction/daily/main2.php
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
<div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
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
                          <option selected="selected" value="none">-Select Project-</option>
                        </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Date <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="date" id="date" name="date" required="required" class="form-control col-md-7 col-xs-12">
                        </div>

                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="day">Day <span class="required"></span>
                        </label>
                        <div class="col-md-4 col-sm-3 col-xs-12">
                          <input type="text" id="day" name="day" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <h3>Work Performed Today</h3>
                      <br>
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Activities</span>
                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Station</span>
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Volume</span>
                      <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" class="form-control"  />

                                        </div>
                                    </div>

                                </div>

                                 <button type="submit" class="btn btn-primary">+</button>
                            </div>
    <div class="container">
    <div class="row">
                              <input type="hidden" name="count" value="1" />
                                <div class="control-group" id="fields">
           
                              <div class="controls" id="profs"> 
                 <form class="input-append">
                               <div id="field"><input autocomplete="off" class="input" id="field1" name="prof1" type="text" placeholder="Type something" data-items="8"/><button id="b1" class="btn add-more" type="button">+</button></div>
                </form>
            <br>
          
            </div>
        </div>
  </div>
</div>
                            <h3>Weather</h3>

                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">AM</span>
                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">PM</span>

                      <div class="row clearfix" style="width:800px; margin:0 auto;">
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" class="form-control"  />

                                        </div>
                                    </div>

                                </div>

                            </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 " for="number">Toolbox Meeting Conducted? <span class="required">*</span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Manpower</span>
                     &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">No.</span>

                      <div class="row clearfix" style="width:800px; margin:0 auto;">
                                <div class="col-sm-3">
                                    <div class="form-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" class="form-control"  />

                                        </div>
                                    </div>

                                </div>
                                 <button type="submit" class="btn btn-primary">+</button>
                            </div>


                      <br>
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Material/Lubricants/Materials Used</span>
                     &emsp;&emsp;&emsp;&emsp;
                      <span class="section">Quantity</span>
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section" >Equipment Used</span>
                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section" >Utilization</span>
                      <div class="row clearfix" style="width:800px; margin:0 auto;">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" class="form-control"  />

                                        </div>

                                    </div>

                                </div>
                                <div class="col-xs-3">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" class="form-control"  />

                                        </div>

                                    </div>

                                </div>
                                 <button type="submit" class="btn btn-primary">+</button>
                            </div>



                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Materials/Equipment/Documents Received</span>
                   &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                      <span class="section">Quantity</span>

                      <div class="row clearfix" style="width:800px; margin:0 auto;">
                                <div class="col-sm-6">
                                    <div class="form-group">

                                        <div class="form-line">
                                            <input type="text" class="form-control"  />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="form-line">

                                            <input type="text" class="form-control"  />

                                        </div>
                                    </div>

                                </div>

                            </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 " for="number">Problems Encountered:<span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Visitors: <span class="required"></span>
                        </label>

                        <div class="col-xs-3 col-sm-3 col-xs-6">
                          <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Prepared by: <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Approved by:</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
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

   <script src="../../../controller/steps-contract.js" type="text/javascript"></script>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>

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
