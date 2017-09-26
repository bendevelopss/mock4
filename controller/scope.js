reset();
populate_table_main();

$('#btn_save').val('create');



var table_main = $('#table_main').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});  //Initialize the datatable

function populate_table_main(){
//ajax now
$.ajax ({
	type: "POST",
	url: "../../../model/scope/populate_table_main.php",
	dataType: 'json',
	cache: false,
	success: function(s)
	{
		// console.log(s)
		table_main.fnClearTable();
		for(var i = 0; i < s.length; i++)
		{
			//if(s[i][2]=='inactive'){enability='disabled'}
			table_main.fnAddData
			([
				s[i].scope_id,s[i].scope_name,
				'<button data-toggle="tooltip" onclick="table_row_view(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete"> <i class="fa fa-trash"></i>Delete </button>',
			],false);
			table_main.fnDraw();

		}
	}
});
//ajax end
} //

// function multiple_projects(obj){
// 	let projects = '';
// 	obj.map((tae)=>{
// 		projects += `${tae.project_name} ,`
// 	})
// 	return projects;
// }

function table_row_view(id){
reset();
$("#myModal").modal("show");
	//ajax now
$.ajax ({
	type: "POST",
	url: "../../../model/scope/fetch.php",
	data: 'id='+id,
	dataType: 'json',
	cache: false,
	success: function(s){
		$('#btn_save').val(id);
		$('#f_name').val(s[0][0]);
		$('#f_amount').val(s[0][1]);
		$('#f_contact').val(s[0][2]);
		$('#f_scope').val(s[0][3]);
		$('#f_billing').val(s[0][4]);
		$('#f_duration').val(s[0][5]);
		$('#f_personnel').val(s[0][6]);


	}
});
//ajax end
}



$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
err = false;

if($('#f_name').val()==''){
	err = true;
	$('#f_name_div').addClass('has-error');
}
else
	$('#f_name_div').removeClass('has-error');

return err;
}


function reset(){
$('#btn_save').val('create');

		$('#f_name').val('');


 		$('#f_name_div').removeClass('has-error');







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
    swal("Deleted!", "User Deleted", "success");
  	//ajax  start
  	$.ajax ({
		type: "POST",
		url: "../../../model/scope/delete.php",
		data: 'id='+id,
		dataType: 'json',
		cache: false,
		success: function(s){}
	});
	//ajax end
		reset();
		populate_table_main();

  } else {
    swal("Cancelled", "User Cancelled", "error");
  }
});

}







$('#btn_save').click(function(){

if(validate_form()==true){}
else{


	var name =$('#f_name').val();
	var amount =$('#f_amount').val();
	var details =$('#f_contact').val();
	var sched =$('#f_unit').val();
	var scope =$('#f_scope').val();
	var billing =$('#f_billing').val();
	var duration =$('#f_duration').val();
	var number =$('#f_personnel').val();

	var dataString = 'job='+name+'&amount='+ amount+'&details='+ details+'&sched='+ billing+'&duration='+ duration+'&number='+ number;



	console.log(dataString);

	if(this.value=='create'){ //CREATE MODE
		//ajax now
		$.ajax ({
			type: "POST",
			url: "../../../model/scope/create.php",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(s){	}
		});
		//ajax end
		swal({

title: "Saved",
  text: "Will close in 1 seconds.",
  type: "success",
  timer: 1200,
  showConfirmButton: false


});
			//alert('Saved');
			reset();
			$("#myModal").modal("hide");
			populate_table_main();
	}
	else{ //UPDATE MODE
		var id = this.value;
		//ajax now
		$.ajax ({
			type: "POST",
			url: "../../../model/scope/update.php",
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
