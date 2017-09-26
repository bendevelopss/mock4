reset();
populate_table_main();//populate main table
populate_cat();//populate dropbox category
//populate_sub();


$('#btn_save').val('create');

var table_main = $('#table_main').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});  //Initialize the datatable


function populate_table_main(){
	//ajax now
$.ajax ({
	type: "POST",
	url: "../../../model/equipment/populate_table_main.php",
	dataType: 'json',
	cache: false,
	success: function(s)
	{
			 console.log(s)
		table_main.fnClearTable();
		for(var i = 0; i < s.length; i++)
		{
			//if(s[i][2]=='inactive'){enability='disabled'}
			table_main.fnAddData
			([s[i][0],s[i][1],s[i][2],s[i][3],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete"> <i class="fa fa-trash"></i>Delete </button>',
			],false);
			table_main.fnDraw();
			//$('#loading').modal('hide');


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
	url: "../../../model/equipment/fetch.php",
	data: 'id='+id,
	dataType: 'json',
	cache: false,
	success: function(s){
		changes(s[0][0],s[0][1]);
		$('#btn_save').val(id);
		$('#f_category_type').val(s[0][0]);
		$('#f_desc').val(s[0][2]);
		$('#f_model').val(s[0][3]);
		$('#f_size').val(s[0][4]);
		$('#f_platenum').val(s[0][5]);
		$('#f_serialnum').val(s[0][6]);
		$('#f_units').val(s[0][7]);
		$('#f_rate').val(s[0][8]);

		//$('#modal_equip_type').val(s[0][1]);

	}
});
//ajax end
}

$('#btn_reset').click(function(){ reset(); tae(); })

function validate_form(){
err = false;



if($('#modal_equip_type').val()=='none'){
	err = true;
	$('#modal_equip_type_div').addClass('has-error');
}
else
	$('#modal_equip_type_div').removeClass('has-error');

	if($('#modal_category_type').val()=='none'){
		err = true;
		$('#modal_category_type_div').addClass('has-error');
	}
	else
		$('#modal_category_type_div').removeClass('has-error');


if($('#f_category_type').val()=='none'){
	err = true;
	$('#f_category_type_div').addClass('has-error');
}
else
	$('#f_category_type_div').removeClass('has-error');

	if($('#f_category_type').val()=='none'){
		err = true;
		$('#f_category_type_div').addClass('has-error');
	}
	else
		$('#f_category_type_div').removeClass('has-error');





	if($('#f_desc').val()==''){
		err = true;
		$('#f_desc_div').addClass('has-error');
	}
	else
		$('#f_desc_div').removeClass('has-error');

	if($('#f_model').val()==''){
		err = true;
		$('#f_model_div').addClass('has-error');
	}
	else
		$('#f_model_div').removeClass('has-error');

	if($('#f_size').val()==''){
		err = true;
		$('#f_size_div').addClass('has-error');
	}
	else
		$('#f_size_div').removeClass('has-error');

	if($('#f_platenum').val()==''){
		err = true;
		$('#f_platenum_div').addClass('has-error');
	}
	else
		$('#f_platenum_div').removeClass('has-error');

	if($('#f_serialnum').val()==''){
		err = true;
		$('#f_serialnum_div').addClass('has-error');
	}
	else
		$('#f_serialnum_div').removeClass('has-error');

	if($('#f_units').val()=='none'){
		err = true;
		$('#f_units_div').addClass('has-error');
	}
	else
		$('#f_units_div').removeClass('has-error');

	if($('#f_rate').val()==''){
		err = true;
		$('#f_rate_div').addClass('has-error');
	}
	else
		$('#f_rate_div').removeClass('has-error');

	/*if($('#f_category_type').val()=='none'){
		err = true;
		$('#f_category_type_div').addClass('has-error');
	}
	else
		$('#f_category_type_div').removeClass('has-error');
*/


return err;
}


function reset(){
$('#btn_save').val('create');
//tae('All fields of '+$('#f_desc').val()+' has been cleared')
$('#modal_equip_type').val('none');
$('#f_category_type').val('none');
$('#f_desc').val('');
$('#f_model').val('');
$('#f_size').val('');
$('#f_platenum').val('');
$('#f_serialnum').val('');
$('#f_units').val('none');
$('#f_rate').val('');


//$('#modal_user_type').

$('#modal_equip_type_div').removeClass('has-error');
$('#f_category_type_div').removeClass('has-error');
$('#f_desc_div').removeClass('has-error');
$('#f_model_div').removeClass('has-error');
$('#f_size_div').removeClass('has-error');
$('#f_platenum_div').removeClass('has-error');
$('#f_serialnum_div').removeClass('has-error');
$('#f_units_div').removeClass('has-error');
$('#f_rate_div').removeClass('has-error');



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
		url: "../../../model/equipment/delete.php",
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


//sweet end

//var choice = confirm("Are you sure you want to Delete?");
/*if(choice==true){
	//ajax now
	$.ajax ({
		type: "POST",
		url: "../../../model/equipment/delete.php",
		data: 'id='+id,
		dataType: 'json',
		cache: false,
		success: function(s){}
	});
	//ajax end
	console.log(id);
		alert('Success: Deleted ');
		reset();
		populate_table_main();
}*/
}




$('#btn_save').click(function(){

if(validate_form()==true){}
else{

	var equip_type =$('#modal_equip_type').val();
	var equip_cat =$('#f_category_type').val();
	var name =$('#f_desc').val();
	var model =$('#f_model').val();
	var size =$('#f_size').val();
	var plate =$('#f_platenum').val();
	var serial =$('#f_serialnum').val();
	var unit =$('#f_units').val();
	var rate =$('#f_rate').val();
	var dataString = 'equip_type='+ equip_type+'&equip_cat='+equip_cat+'&name='+name+'&model='+model+'&size='+size+'&plate='+plate+'&serial='+serial+"&unit="+unit+"&rate="+rate;



	console.log(dataString);

	if(this.value=='create'){ //CREATE MODE
		//ajax now
		$.ajax ({
			type: "POST",
			url: "../../../model/equipment/create.php",
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
			url: "../../../model/equipment/update.php",
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


$('#f_category_type').change(function(){
	var cat = $('#f_category_type').val();
	changes(cat,'')});

function changes(cat,selector){
	populate_sub(cat,selector);

}


function populate_sub(catz,selector){
			//ajax now

			$.ajax ({
			  type: "POST",
			  url: "../../../model/equipment/populate_subcat.php",
			  data: "cat="+catz,
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#modal_equip_type');
			        c.empty();
			        c.html('<option value="none">--Category--</option>');
			        for(var i = 0; i < s.length; i++) {
			        let iselected = '';
			        if(s[i][0] == selector){ iselected='selected="selected"' }
			        c.append('<option value='+s[i][0]+' '+iselected+'>'+s[i][1]+'</option>');

			        }


			  }
			});
		}

function populate_cat(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/equipment/populate_cat.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#f_category_type');
			        c.empty();
			        c.html('<option selected="selected" value="none">--Category--</option>');
			        for(var i = 0; i < s.length; i++) {
			          let iselected = '';
			          if(s[i][0] == selector){ iselected='selected' }
			          c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}
