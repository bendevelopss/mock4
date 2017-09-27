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
            data : ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']//number of months populate months
        }
    ],
    yAxis : [
        {
            type : 'value'
        }
    ],
    series : [/*
        {
            name:'Mail marketing',
            type:'line',
            stack: 'Total amount',
            areaStyle: {normal: {}},
            data:[120, 132, 101, 134, 90, 230, 210]
        },
        {
            name:'Affiliate advertising',
            type:'line',
            stack: 'Total amount',
            areaStyle: {normal: {}},
            data:[220, 182, 191, 234, 290, 330, 310]
        },
        {
            name:'Video ad',
            type:'line',
            stack: 'Total amount',
            areaStyle: {normal: {}},
            data:[150, 232, 201, 154, 190, 330, 410]
        },
        {
            name:'direct interview',
            type:'line',
            stack: 'Total amount',
            areaStyle: {normal: {}},
            data:[320, 332, 301, 334, 390, 330, 320]
        },
        {
            name:'search engine',
            type:'line',
            stack: 'Total amount',
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            areaStyle: {normal: {}},
            data:[820, 932, 901, 934, 1290, 1330, 1320]
        }*/
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
        {
            name:'task left',
            type:'line',
            smooth:!0,
            stack: 'finish amount',
            label: {
                normal: {
                    show: true,
                    position: 'top'
                }
            },
            areaStyle: {normal: {}},
            data:[100,86,66,51,40,11,0]}
    ]
};
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}
       </script>
<br>
<br>
<br>
<br>
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

     </div>
   </div>
 </div>



       <?php include("../../../view/master/design_end.html");//?>

</body>
</html>