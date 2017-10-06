	reset();
	populate_table_mat();
	populate_table_eqt();
	populate_table_lab();
	populate_item(cont_id);
	populate_eqt();
	$('#btn_save1').val('create');



  var table_mat = $('#matTable').dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []
  });  //Initialize the datatable
  var table_eqt = $('#eqtTable').dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []
  });  //Initialize the datatable
  var table_lab = $('#labTable').dataTable({
    "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
    "aaSorting": []
  });  //Initialize the datatable

function populate_table_mat(){
	//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/monthly_sched/mat/populate_table_mat.php",
	  dataType: 'json',
	  cache: false,
	  success: function(s)
	  {
      	// console.log(s)
	    table_mat.fnClearTable();
	    for(var i = 0; i < s.length; i++)
	    {
	    	//if(s[i][2]=='inactive'){enability='disabled'}

	      table_mat.fnAddData
	      ([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],s[i][6],s[i][7],s[i][8],s[i][9],


	      ],false);
	      table_mat.fnDraw();

	    }
	  }
	});
	//ajax end
} //
function populate_table_eqt(){
	//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/monthly_sched/eqt/populate_table_eqt.php",
	  dataType: 'json',
	  cache: false,
	  success: function(s)
	  {
      	// console.log(s)
	    table_eqt.fnClearTable();
	    for(var i = 0; i < s.length; i++)
	    {
	    	//if(s[i][2]=='inactive'){enability='disabled'}

	      table_eqt.fnAddData
	      ([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],s[i][6],s[i][7],


	      ],false);
	      table_eqt.fnDraw();

	    }
	  }
	});
	//ajax end
} //




function populate_table_lab(){
	//ajax now
	$.ajax ({
	  type: "POST",
	  url: "../../../model/monthly_sched/lab/populate_table_lab.php",
	  dataType: 'json',
	  cache: false,
	  success: function(s)
	  {
      	// console.log(s)
	    table_lab.fnClearTable();
	    for(var i = 0; i < s.length; i++)
	    {
	    	//if(s[i][2]=='inactive'){enability='disabled'}

	      table_lab.fnAddData
	    ([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],s[i][6],s[i][7],

			],false);
	      table_lab.fnDraw();

	    }
	  }
	});
	//ajax end
} //


//codes for equipment
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

//code for matreq
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



$('#btn_reset1').click(function(){ reset1(); tae();})

function validate_form1(){
	err = false;


	return err;
}


function reset1(){
	$('#btn_save').val('create');
	//tae('All fields of '+$('#f_job').val()+' has been cleared')
	$('#f_ID').val('');
	$('#f_name').val('');
	$('#f_cont').val('');
	$('#f_email').val('');
	//$('#modal_user_type').


	$('#f_ID_div').removeClass('has-error');
	$('#f_name_div').removeClass('has-error');
	$('#f_cont_div').removeClass('has-error');
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






$('#btn_save1').click(function(){

	if(validate_form()==true){}
	else{


		var item = $('#item_sel').val();
		var bal = $('#f_bal').val();
		var prj = $('#f_prj').val();
		var desc = $('#f_desc').val()
		var dur = $('#f_dur').val();		
		var w1 = $('#f_w1').val();
		var w2 = $('#f_w2').val();
		var w3 = $('#f_w3').val();
		var w4 = $('#f_w4').val()
		var w5 = $('#f_w5').val();
		var dataString = 'item='+item+'&bal='+bal+'&prjted='+prj+"&desc="+desc+"&dur="+dur+"&w1="+w1+"&w2="+w2+"&w3="+w3+"&w4="+w4+"&w5="+w5;




		console.log(dataString);

		if(this.value=='create'){ //CREATE MODE
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/monthly_sched/mat/create.php",
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

function populate_item(id){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/pay_item/populate_table_main.php",
			  data:"cont_id="+id ,
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#item_sel');
			        c.empty();
			        c.html('<option selected="selected" value="none">--Item--</option>');
			        for(var i = 0; i < s.length; i++) {
			        c.append('<option value='+s[i][0]+'>'+s[i][3]+'</option>');
			        }


			  }
			});
		}
		function populate_eqt(id){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/equipment/populate_table_main.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#eqt_sel');
			        c.empty();
			        c.html('<option selected="selected" value="none">--Equip--</option>');
			        for(var i = 0; i < s.length; i++) {
			        c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}