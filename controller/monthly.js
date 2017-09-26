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

