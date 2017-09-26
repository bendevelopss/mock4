<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>
    
<body>
<div class="se-pre-con"></div>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
     <!-- HEADER END-->
                <!--**********************************-->
            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project</h4>
                        <div class="panel-body">

<!-- page content -->
        <div class="right_col" role="main" style="min-height: 1097px;">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>php fetch project name</h3>
              </div>

              
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>php for each consultant</h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <ul class="stats-overview">
                        <li>
                          <span class="name"> Estimated budget </span>
                          <span class="value text-success"> 2300 </span>
                        </li>
                        <li>
                          <span class="name"> Total amount spent </span>
                          <span class="value text-success"> 2000 </span>
                        </li>
                        <li class="hidden-phone">
                          <span class="name"> Estimated project duration </span>
                          <span class="value text-success"> 20 </span>
                        </li>
                      </ul>
                      <br>


       <div id="container" style="height: 60%"></div>
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
            data:[0, 14, 44, 49, 60, 89, 100]
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
    

       <div id="container1" style="height: 60%"></div>
       <script type="text/javascript" src="echarts.js"></script>
       <script type="text/javascript">
var dom = document.getElementById("container1");
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
            data:[0, 14, 44, 49, 60, 89, 100]
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


                      <div>

                        <h4>Recent Activity</h4>

                        <!-- end of user messages -->
                        <!-- end of user messages -->


                      </div>


                    </div>

                    <!-- start project-detail sidebar -->
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                        <div class="panel-heading">
                           BASIC  FORM ELEMENTS
                        </div>           
                        <div class="panel-body">
                          <h3 class="green"><i class="fa fa-paint-brush"></i> Gentelella</h3>

                          <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</p>
                          <br>

                          <div class="project_detail">

                            <p class="title">Client Company</p>
                            <p>Deveint Inc</p>
                            <p class="title">Project Leader</p>
                            <p>Tony Chicken</p>
                          </div>

                          <br>
                          <h5>Project files</h5>
                          <ul class="list-unstyled project_files">
                            <li><a href="https://colorlib.com/polygon/gentelella/project_detail.html"><i class="fa fa-file-word-o"></i> Functional-requirements.docx</a>
                            </li>
                            <li><a href="https://colorlib.com/polygon/gentelella/project_detail.html"><i class="fa fa-file-pdf-o"></i> UAT.pdf</a>
                            </li>
                            <li><a href="https://colorlib.com/polygon/gentelella/project_detail.html"><i class="fa fa-mail-forward"></i> Email-from-flatbal.mln</a>
                            </li>
                            <li><a href="https://colorlib.com/polygon/gentelella/project_detail.html"><i class="fa fa-picture-o"></i> Logo.png</a>
                            </li>
                            <li><a href="https://colorlib.com/polygon/gentelella/project_detail.html"><i class="fa fa-file-word-o"></i> Contract-10_12_2014.docx</a>
                            </li>
                          </ul>
                          <br>

                          <div class="text-center mtop20">
                            <a href="https://colorlib.com/polygon/gentelella/project_detail.html#" class="btn btn-sm btn-primary">Add files</a>
                            <a href="https://colorlib.com/polygon/gentelella/project_detail.html#" class="btn btn-sm btn-warning">Report contact</a>
                          </div>
                        </div>

                      </section>

                    </div>
                    <!-- end project-detail sidebar -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php include("../../../view/master/design_end.html");//?>

</body>
</html>
