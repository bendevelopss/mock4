 reset();
	populate_part();
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
	  url: "../../../model/pay_item/populate_table_main.php",
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
	      ([s[i][0],s[i][1],s[i][2],


	        '<button data-toggle="tooltip" onclick="table_row_view(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" > <i class="fa fa-eye"></i>View</button>',
	        '<button data-toggle="tooltip" onclick="table_row_del(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete"> <i class="fa fa-trash"></i>Delete </button>',
	      ],false);
	      table_main.fnDraw();

	    }
	  }
	});
	//ajax end
} //


function table_row_view(id){
	reset();
	$("#myModal").modal("show");
		//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/pay_item/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
	  	$('#btn_save').val(id);
			$('#f_code').val(s[0][0]);
	  	$('#f_part').val(s[0][1]);
      $('#f_desc').val(s[0][2]);
	  }
	});
	//ajax end
}



$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
	err = false;

	if($('#f_code').val()==''){
		err = true;
		$('#f_code_div').addClass('has-error');
	}
	else
		$('#f_code_div').removeClass('has-error');

	if($('#f_part').val()==''){
		err = true;
		$('#f_part_div').addClass('has-error');
	}
	else

		$('#f_part_div').removeClass('has-error');

	if($('#f_desc').val()=='none'){
			err = true;
			$('#f_desc_div').addClass('has-error');
		}
		else
			$('#f_desc_div').removeClass('has-error');


	return err;
}


function reset(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')
	$('#f_code').val('');
	$('#f_part').val('none');
	$('#f_desc').val('');

	$('#f_code_div').removeClass('has-error');
	$('#f_part_div').removeClass('has-error');
	$('#f_decs_div').removeClass('has-error');



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
		url: "../../../model/pay_item/pay_item/delete.php",
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

		var code = $('#f_code').val();
		var part = $('#f_part').val();
		var desc = $('#f_desc').val();
		var dataString = 'code='+code+'&part='+part+'&desc='+desc;




		console.log(dataString);

		if(this.value=='create'){ //CREATE MODE
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/pay_item/create.php",
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
			  url: "../../../model/pay_item/update.php",
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

function populate_part(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/pay_item/populate_part.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#f_part');
			        c.empty();
			        c.html('<option selected="selected" value="none">--PART--</option>');
			        for(var i = 0; i < s.length; i++) {
			          let iselected = '';
			          if(s[i][0] == selector){ iselected='selected' }
			          c.append('<option value='+s[i][0]+'>'+s[i][1]+'-'+s[i][2]+'</option>');
			        }


			  }
			});
		}
