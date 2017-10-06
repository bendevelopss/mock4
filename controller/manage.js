	reset();
	populate_table_main();
	populate_empID();
	$('#btn_save').val('create');



  var table_main = $('#table_main').dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []
  });  //Initialize the datatable

function populate_table_main(){
	//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/manage/populate_table_main.php",
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
	      ([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],


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
	  url: "../../../model/manage/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
	  	$('#btn_save').val(id);
	  	$('#f_ID').val(s[0][1]);
		  $('#f_username').val(s[0][2]);
	  	$('#f_userpass').val(s[0][3]);
	  	$('#f_usertype').val(s[0][4]);
	/*  	$('#f_job').val(s[0][4]);
	  	$('#f_email').val(s[0][5]);*/
	  }
	});
	//ajax end
}



$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
	err = false;

	if($('#f_ID').val()=='none'){
		err = true;
		$('#f_ID_div').addClass('has-error');
	}
	else
		$('#f_ID_div').removeClass('has-error');
	if($('#f_username').val()==''){
		err = true;
		$('#f_username_div').addClass('has-error');
	}
	else
		$('#f_username_div').removeClass('has-error');
	if($('#f_userpass').val()==''){
		err = true;
		$('#f_userpass_div').addClass('has-error');
	}
	else
		$('#f_userpass_div').removeClass('has-error');
	if($('#f_usertype').val()=='none'){
		err = true;
		$('#f_usertype_div').addClass('has-error');
	}
	else
		$('#f_usertype_div').removeClass('has-error');

	return err;
}


function reset(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')
	$('#f_ID').val('none');
	$('#f_username').val('');
	$('#f_userpass').val('');
	$('#f_usertype').val('none');
	//$('#modal_user_type').


	$('#f_ID_div').removeClass('has-error');
	$('#f_username_div').removeClass('has-error');
	$('#f_userpass_div').removeClass('has-error');
	$('#f_usertype_div').removeClass('has-error');



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
		url: "../../../model/manage/delete.php",
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

		var ID = $('#f_ID').val();
		var name = $('#f_username').val();
		var pass = $('#f_userpass').val();
		var type = $('#f_usertype').val();
		var dataString = 'ID='+ID+'&user_name='+name+'&user_pass='+pass+"&user_type="+type;




		console.log(dataString);

		if(this.value=='create'){ //CREATE MODE
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/manage/create.php",
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
			  url: "../../../model/manage/update.php",
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


function populate_empID(catz){
			//ajax now

			$.ajax ({
			  type: "POST",
			  url: "../../../model/employee/populate_table_main.php",
			  data: "cat="+catz,
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		console.log(s);
			  		var c = $('#f_ID');
			        c.empty();
			        c.html('<option value="none" selected="selected">--Select--</option>');
			        for(var i = 0; i < s.length; i++) {
			        let iselected = '';
			        // if(s[i][0] == selector){ iselected='selected="selected"' }
			        c.append('<option value='+s[i][0]+' '+iselected+'>'+s[i][1]+'</option>');

			        }


			  }
			});
<<<<<<< HEAD
		}
=======
		}
>>>>>>> 386b3a6561ea6513bd9490af6ee919c6f5576d9f
