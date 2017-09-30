populate_table_manpower();
//populate_recieve();
populate_table();
populate_activity();

var table_use = $('#useTable').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});

var table_recieve = $('#recTable').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});


var table_Activity = $('#ActTable').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});


var table_man = $('#manTable').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});


function populate_table_manpower(){
//ajax now

		$.ajax ({
			type: "POST",
			url: "../../../model/isolate/populate_table_man.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_man.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_man.fnAddData
							([s[i][0],s[i][1],s[i][2],s[i][3],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" id="view" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete" id="del"> <i class="fa fa-trash"></i>Delete </button>',
					],false);
					table_man.fnDraw();

						}
				}
				});
//ajax end

			}

//ano ba git bakit ka nag eeror


function populate_activity(){
//ajax now

		$.ajax ({
			type: "POST",
			url: "../../../model/isolate/populate_table_act.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_Activity.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_Activity.fnAddData
							([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],s[i][6],s[i][7],


				
					],false);
					table_Activity.fnDraw();

						}
				}
				});
//ajax ends

			}


function populate_table(){
//ajax now

		$.ajax ({
			type: "POST",
			url: "../../../model/isolate/table.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{
				//

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
            data:[s[0][0],s[0][1],s[0][2],s[0][3],s[0][4],s[0][5],s[0][6],]
        },
        
    ]
};
;
if (option && typeof option === "object") {
    myChart.setOption(option, true);
}

				//
				}
				});
//ajax end

			}



// function populate_recieve(){
// //ajax now

// 		$.ajax ({
// 			type: "POST",
// 			url: "../../../model/subcat/populate_cat.php",
// 			dataType: 'json',
// 			cache: false,
// 		success: function(s)
// 				{

// 					table_recieve.fnClearTable();
// 					for(var i = 0; i < s.length; i++)
// 						{
// 							//if(s[i][2]=='inactive'){enability='disabled'}
// 							table_recieve.fnAddData
// 							([s[i][0],s[i][1],


// 				'<button data-toggle="tooltip" onclick="table_row_view(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" id="view" > <i class="fa fa-eye"></i>View</button>',
// 				'<button data-toggle="tooltip" onclick="table_row_del(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete" id="del"> <i class="fa fa-trash"></i>Delete </button>',
// 					],false);
// 					table_recieve.fnDraw();

// 						}
// 				}
// 				});
// //ajax end

// 			}
//a no ba mag push ka hinayupak