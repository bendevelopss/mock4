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
	  url: "../../../model/client/populate_table_main.php",
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
	      ([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],s[i][6],


	        '<button data-toggle="tooltip" onclick="table_row_view(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" > <i class="fa fa-eye"></i>View</button>',

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
	  url: "../../../model/client/fetch.php",
	  data: 'id='+id,
	  dataType: 'json',
	  cache: false,
	  success: function(s){
	  	$('#btn_save').val(id);
		$('#f_company').val(s[0][1]);
	  	$('#f_person').val(s[0][2]);
	  	$('#f_contactp').val(s[0][3]);
	  	$('#f_contactc').val(s[0][4]);
		$('#f_address').val(s[0][5]);
		$('#f_email').val(s[0][6]);}

	});
	//ajax end
}



$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
	err = false;


	if($('#f_company').val()==''){
		err = true;
		$('#f_company_div').addClass('has-error');
	}
	else
		$('#f_company_div').removeClass('has-error');

	if($('#f_person').val()==''){
		err = true;
		$('#f_person_div').addClass('has-error');
	}
	else
		$('#f_person_div').removeClass('has-error');

	if($('#f_contactp').val()==''){
		err = true;
		$('#f_contactp_div').addClass('has-error');
	}
	else
		$('#f_contactp_div').removeClass('has-error');

	if($('#f_contactc').val()==''){
		err = true;
		$('#f_contactc_div').addClass('has-error');
	}
	else
		$('#f_contactc_div').removeClass('has-error');

	if($('#f_address').val()==''){
		err = true;
		$('#f_address_div').addClass('has-error');
	}
	else
		$('#f_address_div').removeClass('has-error');

	if($('#f_email').val()==''){
		err = true;
		$('#f_email_div').addClass('has-error');
	}
	else
		$('#f_email_div').removeClass('has-error');

	return err;
}


function reset(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')
	$('#f_company').val('');
	$('#f_person').val('');
	$('#f_contactp').val('');
	$('#f_contactc').val('');
	$('#f_address').val('');
	$('#f_email').val('');


	$('#f_company_div').removeClass('has-error');
	$('#f_person_div').removeClass('has-error');
	$('#f_contactp_div').removeClass('has-error');
	$('#f_contactc_div').removeClass('has-error');
	$('#f_address_div').removeClass('has-error');
	$('#f_email_div').removeClass('has-error');



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
		url: "../../../model/client/delete.php",
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


		var name = $('#f_company').val();
		var contactc = $('#f_contactc').val();
		var add = $('#f_address').val();
		var email = $('#f_email').val();
		var person = $('#f_person').val();
		var contactp = $('#f_contactp').val();
		var dataString = 'name='+name+'&contactc='+contactc+'&person='+person+'&contactp='+contactp+'&address='+add+'&email='+email;



		console.log(dataString);

		if(this.value=='create'){ //CREATE MODE
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/client/create.php",
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
		  	populate_table_main();
		  	$("#myModal").modal("hide");
		}
		else{ //UPDATE MODE
			var id = this.value;
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/client/update.php",
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
		  	populate_table_main();
			$("#myModal").modal("hide");

		}
	}



})
