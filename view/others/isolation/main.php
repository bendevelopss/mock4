<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
    
    <body>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project</h4>
                        <div class="panel-body">


  <br>
  <br>
  <br>


       <div id="container" class="col-sm-8 col-xs-12" id="f_job_div" style="height: 60%"></div>
       <script type="text/javascript" src="echarts.js"></script>
       <script type="text/javascript">
var dom = document.getElementById("container");
       
        var myChart = echarts.init(dom);
var app = {};
option = null;

if (option && typeof option === "object") {
    myChart.setOption(option, true);
}

       </script>

                 <div class="col-md-12">
                <br>
<br>
<br>
<br>
    
                </div>
                <br>
                <br>
                <br>
                  <div class="row" style="margin-top:25px">
                  <div class="col-sm-4 col-xs-12">
                          <table id="ActTable" class="table table-condensed table-bordered table-hover table-striped" >
                            <thead>
                              <th>Activities</th>                         
                              <th>Item</th>                         
                              <th>Station</th>                         
                              <th>Volume</th> 
                              <th>percentage base on item</th> 
                              <th>percentage base on part</th> 
                              <th>part progress add</th> 
                              <th>part id</th> 

                            </thead>
                            
                            <tbody></tbody>            
                          </table> 
                  </div> <!-- /. col --> 
                  </div>               
                  <div class="row" style="margin-top:25px">
                  <div class="col-sm-4 col-xs-12">
                          <table id="manTable" class="table table-condensed table-bordered table-hover table-striped" >
                            <thead>
                              <th>id</th>                         
                              <th>part name</th>                         
                              <th>percent</th>                         
                              <th>progress</th> 
                            
                            </thead>
                            
                            <tbody></tbody>            
                          </table> 
                  </div> <!-- /. col --> 
                  </div>
     </div>
   </div>
 </div>




       <?php include("../../../view/master/design_end.html");//?>
    <script src="../../../controller/isolate.js" type="text/javascript"></script>


</body>
</html>