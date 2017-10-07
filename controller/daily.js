populate_recieve();
populate_act();
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
							([s[i][0],s[i][2],s[i][3],


				
					],false);
					table_Activity.fnDraw();

						}
				}
				});
//ajax end

			}

			//codes for activity
			function table_row_view(id){
	reset();
	$("#myModal").modal("show");
		//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/project/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
	  	$('#btn_save').val(id);
	  	$('#f_ID').val(id);
		$('#f_name').val(s[0][1]);
	  	$('#f_cont').val(s[0][3]);
	  	$('#f_add').val(s[0][4]);
	  	$('#f_job').val(s[0][2]);
	  	$('#f_email').val(s[0][5]);
	  }
	});
	//ajax end
}



$('#btn_reset').click(function(){ reset1(); tae();})

function validate_form(){
	err = false;


	return err;
}


function reset(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')




}



function tae()
{


swal({

title: "Cleared",
  text: "Will close in 1 second",
  type: "success",
  timer: 1000,
  showConfirmButton: false


});



}

function table_row_del(id){
//sweet start
swal({
  title: "Do you want to Delete?",


  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Delete",
  cancelButtonText: "Cancel",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("Deleted!", "Data Deleted", "success");
  	//ajax  start
  	$.ajax ({
		type: "POST",
		url: "../../../model/project/delete.php",
		data: 'id='+id,
		dataType: 'json',
		cache: false,
		success: function(s){populate_table_mat()}
	});
	//ajax end


  } else {
    swal("Cancelled", "User Cancelled", "error");
  }
});




}






$('#btn_save').click(function(){

	if(validate_form()==true){}
	else{


		// var item = $('#item_sel').val();
		var qty = $('#f_qty1').val();
		var desc = $('#eqt_sel').val()
		var dur = $('#f_dur1').val();		
		var w1 = $('#f_w11').val();
		var w2 = $('#f_w21').val();
		var w3 = $('#f_w31').val();
		var w4 = $('#f_w41').val()
		var w5 = $('#f_w51').val();
		var dataString = 'qty='+qty+"&desc="+desc+"&dur="+dur+"&w1="+w1+"&w2="+w2+"&w3="+w3+"&w4="+w4+"&w5="+w5;




		console.log(dataString);

		if(this.value=='create'){ //CREATE MODE
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/monthly_sched/eqt/create.php",
			  data: dataString,
			  dataType: 'json',
			  cache: false,
			  success: function(s){	}
			});
			//ajax end
		  	//alert('Saved');

swal({

title: "Saved",
  text: "Will close in 1 seconds.",
  type: "success",
  timer: 1200,
  showConfirmButton: false


});
		  	reset();
				$("#myModal").modal("hide");
		  	populate_table_main();
		}
		else{ //UPDATE MODE
			var id = this.value;
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/project/update.php",
			  data: dataString+'&id='+id,
			  dataType: 'json',
			  cache: false,
			  success: function(s){}
			});
			//ajax end
		  	swal({

title: "Updated",
  text: "Will close in 1 seconds.",
  type: "success",
  timer: 1200,
  showConfirmButton: false


});
		  	reset();
				$("#myModal").modal("hide");
		  	populate_table_main();
		}
	}



})
			//


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



		function populate_act(id){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/monthly_sched/mat/populate_table_mat.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#act_sel');
			        c.empty();
			        c.html('<option selected="selected" value="none">--Activity--</option>');
			        for(var i = 0; i < s.length; i++) {
			        c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}