populate_table_manpower();
populate_recieve();
populate_used();
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
			url: "../../../model/subcat/populate_cat.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_man.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_man.fnAddData
							([s[i][0],s[i][1],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" id="view" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete" id="del"> <i class="fa fa-trash"></i>Delete </button>',
					],false);
					table_man.fnDraw();

						}
				}
				});
//ajax end

			}



function populate_activity(){
//ajax now

		$.ajax ({
			type: "POST",
			url: "../../../model/daily/populate_table_act.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_Activity.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_Activity.fnAddData
							([s[i][0],s[i][1],s[i][2],


				
					],false);
					table_Activity.fnDraw();

						}
				}
				});
//ajax end

			}


function populate_used(){
//ajax now

		$.ajax ({
			type: "POST",
			url: "../../../model/subcat/populate_cat.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_use.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_use.fnAddData
							([s[i][0],s[i][1],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" id="view" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete" id="del"> <i class="fa fa-trash"></i>Delete </button>',
					],false);
					table_use.fnDraw();

						}
				}
				});
//ajax end

			}



function populate_recieve(){
//ajax now

		$.ajax ({
			type: "POST",
			url: "../../../model/subcat/populate_cat.php",
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_recieve.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_recieve.fnAddData
							([s[i][0],s[i][1],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" id="view" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete" id="del"> <i class="fa fa-trash"></i>Delete </button>',
					],false);
					table_recieve.fnDraw();

						}
				}
				});
//ajax end

			}
