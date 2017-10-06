populate_emp("#OM");
populate_emp("#PI");
populate_emp("#Materials");
populate_emp("#Foreman");
populate_emp("#Warehouse");
populate_emp("#Equipment-in-Charge");
populate_emp("#Safety");
populate_emp("#Timekeeper");



function saves1()
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


		var om =$('#OM').val();
		var pi =$('#PI').val();
		var mat =$('#Materials').val();
		var Foreman =$('#Foreman').val();
		var Warehouse =$('#Warehouse').val();
		var EIC =$('#Equipment-in-Charge').val();
		var Safety =$('#Safety').val();
		var time =$('#Timekeeper').val();
		var cont_id =$('#cont_id').val();

		var dataString ='om='+om+'&cont_id='+cont_id+'&pi='+pi+'&mat='+mat+'&Foreman='+Foreman+'&Warehouse='+Warehouse+'&EIC='+EIC+'&Safety='+Safety+'&time='+time;
		console.log(dataString);

		swal("", "Saved", "success");

		$.ajax ({
			type: "POST",
			url: "../../../model/transaction/team.php",
			data: dataString,
			dataType: 'json',
			cache: false,
			success: function(s){
				//alert("shit");
debugger;				
				window.location="../../../view/transaction/PM/main.php";
//				 window.location="main.php";
			 }
		});



  } else {
    swal("", "Cancelled", "error");
  }


});

}//end swal

}

function populate_emp(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/employee/populate_table_main.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $(selector);
			        c.empty();
			        c.html('<option selected="selected" value="none">--Employee--</option>');
			        for(var i = 0; i < s.length; i++) {
			        c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}


$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(){
err = false;

if($('#OM').val()=='none'){
	err = true;
	$('#OM_div').addClass('has-error');
}
else
	$('#OM_div').removeClass('has-error');


		if($('#PI').val()=='none'){
			err = true;
			$('#PI_div').addClass('has-error');
		}
		else
			$('#PI_div').removeClass('has-error');

			if($('#Materials').val()=='none'){
				err = true;
				$('#Materials_div').addClass('has-error');
			}
			else
				$('#Materials_div').removeClass('has-error');

		if($('#Foreman').val()=='none'){
			err = true;
			$('#Foreman_div').addClass('has-error');
			}
		else
			$('#Foreman_div').removeClass('has-error');

		if($('#Warehouse').val()=='none'){
			err = true;
			$('#Warehouse_div').addClass('has-error');
			}
		else
			$('#Warehouse_div').removeClass('has-error');
		
		if($('#Equipment-in-Charge').val()=='none'){
			err = true;
			$('#Equipment-in-Charge_div').addClass('has-error');
			}
		else
			$('#Equipment-in-Charge_div').removeClass('has-error');

		if($('#Safety').val()=='none'){
			err = true;
			$('#Safety_div').addClass('has-error');
			}
		else
			$('#Safety_div').removeClass('has-error');

		if($('#Timekeeper').val()=='none'){
			err = true;
			$('#Timekeeper_div').addClass('has-error');
			}
		else
			$('#Timekeeper_div').removeClass('has-error');


return err;
}


function reset(){
$('#btn_save').val('create');

		$('#OM').val('none');
		$('#PI').val('none');
		$('#Materials').val('none');
		$('#Foreman').val('none');
		$('#Warehouse').val('none');
		$('#Equipment-in-Charge').val('none');
		$('#Safety').val('none');
		$('#Timekeeper').val('none');

 		$('#OM_div').removeClass('has-error');
		$('#PI_div').removeClass('has-error');
		$('#Materials_div').removeClass('has-error');
		$('#Foreman_div').removeClass('has-error');
		
		$('#Warehouse_div').removeClass('has-error');
		$('#Equipment-in-Charge_div').removeClass('has-error');
		$('#Timekeeper_div').removeClass('has-error');
		$('#Safety_div').removeClass('has-error');



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