
populate_client()

function populate_client(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/client/populate_table_main.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#client');
			        c.empty();
			        c.html('<option selected="selected" value="none">--Client--</option>');
			        for(var i = 0; i < s.length; i++) {
			          let iselected = '';
			          if(s[i][0] == selector){ iselected='selected' }
			          c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}


function saves()

{

if(validate_form()==true){}
	else{

swal({
  title: "Save And proceed?",
  text:"Make sure your input are all correct",
  type: "info",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Yes",
  cancelButtonText: "No",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {

		var cont_id =$('#cont_id').val();
		var client =$('#client').val();
		var name =$('#cont_name').val();
		var day =$('#cont_day').val();
		var amount =$('#cont_amount').val();
		var user =$('#user_id-hide').val();
		var start =$('#cont_start').val();
		var ref =$('#cont_ref').val();
		//var period =$('#cont_period').val();


		var dataString ='cont_id='+cont_id+'&client='+client+'&name='+name+'&day='+day+'&amount='+amount+'&user='+user+'&ref='+ref+'&start='+start ;
		
		console.log(dataString);

		swal("", "Saved", "success");

		$.ajax ({
			type: "POST",
			url: "../../../model/transaction/contract.php",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(s){
				 window.location="main.php";
			 }
		});



  } else {
    swal("", "Cancelled", "error");
  }
});

}

}

$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
	err = false;

	if($('#cont_id').val()==''){
		err = true;
		$('#cont_id_div').addClass('has-error');
	}
	else
		$('#cont_id_div').removeClass('has-error');

	if($('#client').val()=='none'){
		err = true;
		$('#client_div').addClass('has-error');
	}
	else
		$('#client_div').removeClass('has-error');

	if($('#cont_name').val()==''){
		err = true;
		$('#cont_name_div').addClass('has-error');
	}
	else
		$('#cont_name_div').removeClass('has-error');
	if($('#cont_day').val()==''){
		err = true;
		$('#cont_day_div').addClass('has-error');
	}
	else
		$('#cont_day_div').removeClass('has-error');
	if($('#cont_amount').val()==''){
		err = true;
		$('#cont_amount_div').addClass('has-error');
	}
	else
		$('#cont_amount_div').removeClass('has-error');

	if($('#cont_start').val()==''){
		err = true;
		$('#cont_start_div').addClass('has-error');
	}
	else
		$('#cont_start_div').removeClass('has-error');

	if($('#cont_ref').val()==''){
		err = true;
		$('#cont_ref_div').addClass('has-error');
	}
	else
		$('#cont_ref_div').removeClass('has-error');
	return err;
}

var cont_id =$('#cont_id').val();
		var client =$('#client').val();
		var name =$('#cont_name').val();
		var day =$('#cont_day').val();
		var amount =$('#cont_amount').val();
		var user =$('#user_id-hide').val();
		var start =$('#cont_start').val();
		var ref =$('#cont_ref').val();

function reset(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')
	$('#cont_id').val('');
	$('#client').val('none');
	$('#cont_name').val('');
	$('#cont_day').val('');
	$('#cont_amount').val('');
	$('#cont_start').val('');
	$('#cont_ref').val('');


	$('#cont_id_div').removeClass('has-error');
	$('#client_div').removeClass('has-error');
	$('#cont_name_div').removeClass('has-error');
	$('#cont_day_div').removeClass('has-error');
	$('#cont_amount_div').removeClass('has-error');
	$('#cont_start_div').removeClass('has-error');
	$('#cont_ref_div').removeClass('has-error');



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