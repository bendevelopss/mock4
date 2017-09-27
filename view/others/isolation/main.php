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
option = {
    title: {
        text: 'Project Progress',
        subtext:"Weekly updated"
    },
    tooltip : {
        trigger: 'axis',
        axisPointer: {
            type: 'cross',
            label: {
                backgroundColor: '#6a7985'
            }
        }
    },
    legend: {x:220,y:20,data:["Real-Time","Expectation","task left"]
    },
    //toolbox: {
    //    feature: {
     //       saveAsImage: {}
     //   }
    //},
    toolbox:{show:!0,feature:{magicType:{show:!0,title:{line:"Line",bar:"Bar",stack:"Stack"},
type:["line","bar","stack"]},restore:{show:!0,title:"Restore"},saveAsImage:{show:!0,title:"Save Image"}}},calculable:!0,
    grid: {
        left: '3%',
        right: '4%',
        bottom: '3%',
        containLabel: true
    },
    xAxis : [
        {
            type : 'category',
            boundaryGap : false,
            data : ['1','2','3','4','5','6','7',]//number of months populate months
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [
       
        {
            name:'Expectation',
            type:'line',
            stack: 'Total amount',
            smooth:!0,
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            areaStyle: {normal: {}},
            data:[0, 10, 30, 50, 70, 90, 100]
        },
        {
            name:'Real-Time',
            type:'line',
            smooth:!0,
            stack: 'accumulate amount',
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            areaStyle: {normal: {}},
            data:[0, 14, 44]
        },
        
    ]
};
;
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
                            </thead>
                            
                            <tbody></tbody>            
                          </table> 
                  </div> <!-- /. col --> 
                  </div>
     </div>
   </div>
 </div>




       <?php include("../../../view/master/design_end.html");//?>
    <script src="../../../controller/daily.js" type="text/javascript"></script>


</body>
</html>