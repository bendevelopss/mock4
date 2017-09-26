<?php include('../../../controller/master/log.php');


?>
<style type="text/css">
    no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background: url(../../../assets/img/2.gif) center no-repeat #fff;
}
</style>

<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
<style type=”text/css”>
* {
  .border-radius(0) !important;
}

#field {
    margin-bottom:20px;
}
</style>
<script type="text/javascript">

    $(document).ready(function(){
      // Smart Wizard
      $('#wizard').smartWizard({transitionEffect:'slide'});

    });
</script>

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

<body>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
    <!-- LOGO HEADER END-->
<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td>
       <h2>Project Information</h2>
<!-- Tabs -->
  		<div id="wizard" class="swMain">
  			<ul>
  				<li><a href="#step-1">
                <label class="stepNumber">1</label>
                <span class="stepDesc">
                   Step 1<br />
                   <small>Step 1: Project Details</small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <label class="stepNumber">2</label>
                <span class="stepDesc">
                   Step 2<br />
                   <small>Step 2: Project Team</small>
                </span>
            </a></li>
  				<li><a href="#step-3">
                <label class="stepNumber">3</label>
                <span class="stepDesc">
                   Step 3<br />
                   <small>Step 3: Subcontractors</small>
                </span>
             </a></li>
  				<li><a href="#step-4">
                <label class="stepNumber">4</label>
                <span class="stepDesc">
                   Step 4<br />
                   <small>Step 4: Consultants</small>
                </span>
            </a></li>

            <li><a href="#step-5">
                  <label class="stepNumber">5</label>
                  <span class="stepDesc">
                     Step 5<br />
                     <small>Step 5: Report Submission Schedule</small>
                  </span>
              </a></li>

              <li><a href="#step-6">
                    <label class="stepNumber">6</label>
                    <span class="stepDesc">
                       Step 6<br />
                       <small>Step 6: Inspection Schedule</small>
                    </span>
                </a></li>



  			</ul>
  			<div id="step-1">
            <h2 class="StepTitle">Step 1: Project Details</h2>

            <p><br>
              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-name">Project Name <span class="required">*</span>
              </label>
              <input type="text" id="proj-name" required="required" class="form-control col-md-7 col-xs-12">
             <br><br>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-code">Project Code <span class="required">*</span>
              </label>
              <input type="text" id="proj-code" required="required" class="form-control col-md-7 col-xs-12">
             <br><br>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Project Location <span class="required">*</span>
              </label>
             <input type="text" id="proj-location" required="required" class="form-control col-md-7 col-xs-12">
             <br><br>

              <label for="client" class="control-label col-md-24 col-sm-12 col-xs-12">Client</label>
              <select id="client" class="form-control" required="">
              <option value="">Select..</option>
            </select><br><br>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="proj-location">Contract Reference Number<span class="required">*</span>
              </label>
              <input type="number" id="cont-refnum" required="required" class="form-control col-md-7 col-xs-12">
             <br><br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-period">Contract Period <span class="required">*</span>
            </label>
            <input type="text" id="cont-period" required="required" class="form-control col-md-7 col-xs-12">
           <br><br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="date-award">Date of Award <span class="required">*</span>
          </label>
          <input type="date" id="date-award" required="required" class="form-control col-md-7 col-xs-12">
         <br><br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="date-target">Target Date <span class="required">*</span>
        </label>
        <input type="date" id="date-target" required="required" class="form-control col-md-7 col-xs-12">
       <br><br>

      </div>

  			<div id="step-2">
            <h2 class="StepTitle">Step 2: Project Team</h2>
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

            </p>

        </div>
  			<div id="step-3">
            <h2 class="StepTitle">Step 3: Subcontractors</h2>
            <p>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="s-name">Name <span class="required">*</span>
            </label>
            <input type="text" id="s-name" required="required" class="form-control col-md-7 col-xs-12">
           <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">Contact Details <span class="required">*</span>
          </label>

          <br>

          

          <input type="number" id="cont-details" required="required" class="form-control col-md-7 col-xs-12">
         <br>

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

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="billing">Billing Schedule <span class="required">*</span>
        </label>
        <input type="date" id="billing" required="required" class="form-control col-md-7 col-xs-12">
       <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-duration">Contract Duration <span class="required">*</span>
        </label>
        <input type="date" id="cont-duration" required="required" class="form-control col-md-7 col-xs-12">
       <br>

        <label class="control-label col-md-24 col-sm-12 col-xs-12" for="num-personnel">Number of Personnel <span class="required">*</span>
        </label>
        <input type="text" id="num-personnel" required="required" class="form-control col-md-7 col-xs-12">
       <br>

      <label for="scope" class="control-label col-md-24 col-sm-12 col-xs-12">Scope of Work</label>
      <select id="scope" class="form-control" required="">
      <option value="">Select..</option>
    </select>

            </p>
        </div>

  			<div id="step-4">
            <h2 class="StepTitle">Step 4: Consultants</h2>
            <p>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="s-name">Name <span class="required">*</span>
              </label>
              <input type="text" id="s-name" required="required" class="form-control col-md-7 col-xs-12">
             <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="company">Company Name <span class="required">*</span>
            </label>
            <input type="text" id="scope" required="required" class="form-control col-md-7 col-xs-12">
           <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">Contact Details <span class="required">*</span>
            </label>
            <input type="number" id="cont-details" required="required" class="form-control col-md-7 col-xs-12">
           <br>

          <label for="scope" class="control-label col-md-24 col-sm-12 col-xs-12">Scope of Work</label>
          <select id="scope" class="form-control" required="">
          <option value="">Select..</option>
        </select>
        </div>

        <div id="step-5">
            <h2 class="StepTitle">Step 5: Report Schedule</h2>
            <p>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="report">Report Title <span class="required">*</span>
              </label>
              <input type="text" id="report" required="required" class="form-control col-md-7 col-xs-12">
             <br>

            <label for="freq" class="control-label col-md-24 col-sm-12 col-xs-12">Frequency</label>
            <select id="freq" class="form-control" required="">
            <option value="">Select..</option>
            <option value="1">Daily</option>
            <option value="1">Weekly</option>
            <option value="1">Monthly</option>
          </select> <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">Assigned Person<span class="required">*</span>
            </label>
            <input type="number" id="assign" required="required" class="form-control col-md-7 col-xs-12">
          <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">To be submitted to<span class="required">*</span>
          </label>
          <input type="number" id="assign" required="required" class="form-control col-md-7 col-xs-12">
         <br>

        </div>


        <div id="step-4">
            <h2 class="StepTitle">Step 4: Consultants</h2>
            <p>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="s-name">Name <span class="required">*</span>
              </label>
              <input type="text" id="s-name" required="required" class="form-control col-md-7 col-xs-12">
           <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="company">Company Name <span class="required">*</span>
            </label>
            <input type="text" id="scope" required="required" class="form-control col-md-7 col-xs-12">
           <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">Contact Details <span class="required">*</span>
            </label>
            <input type="number" id="cont-details" required="required" class="form-control col-md-7 col-xs-12">
           <br>

          <label for="scope" class="control-label col-md-24 col-sm-12 col-xs-12">Scope of Work</label>
          <select id="scope" class="form-control" required="">
          <option value="">Select..</option>
        </select>
        </div>

        <div id="step-6">
            <h2 class="StepTitle">Step 6: Inspection Schedule</h2>
            <p>

              <label class="control-label col-md-24 col-sm-12 col-xs-12" for="report">Report Type <span class="required">*</span>
              </label>
              <input type="text" id="report" required="required" class="form-control col-md-7 col-xs-12">
             <br>

            <label for="freq" class="control-label col-md-24 col-sm-12 col-xs-12">Frequency</label>
            <select id="freq" class="form-control" required="">
            <option value="">Select..</option>
            <option value="1">Daily</option>
            <option value="2">Weekly</option>
            <option value="3">Monthly</option>
          </select> <br>

            <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">Responsibility<span class="required">*</span>
            </label>
            <input type="text" id="assign" required="required" class="form-control col-md-7 col-xs-12">
           <br>

          <label class="control-label col-md-24 col-sm-12 col-xs-12" for="cont-details">Records/Output<span class="required">*</span>
          </label>
          <input type="text" id="assign" required="required" class="form-control col-md-7 col-xs-12">
         <br>

      </div>








  		</div> <!--end wizard-->

<!-- End SmartWizard Content -->

</td></tr>
</table>

</body>
</html>
