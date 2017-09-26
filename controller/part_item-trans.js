reset();
populate_table_main(1);
populate_table_main(0);
populate_cat();
populate_cats();

$('#btn_save').val('create');
$('#btn_save1').val('create');



var table_category = $('#table_category').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});
var table_subcategory = $('#table_subcategory').dataTable({
	"aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
	"aaSorting": []
});




function populate_table_main(table){
//ajax now
if(table==1){

		$.ajax ({
			type: "POST",
			url: "../../../model/part_item-trans/populate_table_part.php",
			data:"cont_id="+cont_id ,
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_category.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							table_category.fnAddData
							([s[i][0],s[i][1],s[i][2],s[i][3],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" id="view" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value,1)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete" id="del"> <i class="fa fa-trash"></i>Delete </button>',
					],false);
					table_category.fnDraw();

						}
				}
				});
//ajax end
			}
		else if(table==0)
			{
					$.ajax ({
			type: "POST",
	  	url: "../../../model/pay_item/populate_table_main.php",
		//	url: "../../../model/part_item/populate_table_main.php",
			data:"cont_id="+cont_id ,
			dataType: 'json',
			cache: false,
			success: function(s)
				{

					table_subcategory.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_subcategory.fnAddData
							([s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],s[i][5],


				'<button data-toggle="tooltip" onclick="table_row_view(this.value,0)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs " title="VIEW /Edit" > <i class="fa fa-eye"></i>View</button>',
				'<button data-toggle="tooltip" onclick="table_row_del(this.value,0)" value='+s[i][0]+' data-toggle="modal" class="btn btn-xs  btn-danger" title="Delete"> <i class="fa fa-trash"></i>Delete </button>',
					],false);
					table_subcategory.fnDraw();

						}
				}
				});

			}
			else
			{
				alert("error table"+table );
			}
	}

function table_row_view(id,tab){
if(tab==1){
reset();
$("#cat").modal("show");
	//ajax now
$.ajax ({
	type: "POST",
	url: "../../../model/subcat/fetch.php",
	data: 'id='+id,
	dataType: 'json',
	cache: false,
	success: function(s){
		$('#btn_save').val(id);
		$('#f_type_cat').val(s[0][0]);



	}
});
//ajax end
}
else if(tab==0)
{
	reset();
$("#subcat").modal("show");
	//ajax now
$.ajax ({
	type: "POST",
	url: "../../../model/subcat/fetch1.php",
	data: 'id='+id,
	dataType: 'json',
	cache: false,
	success: function(s){
		$('#btn_save1').val(id);
		$('#f_type_subcat').val(s[0][0]);
		$('#modal_category').val(s[0][1]);



	}
});
//ajax end



}
else
{

	alert("error tab="+tab);
}
}


$('#btn_reset1').click(function(){ reset(); tae();})
$('#btn_reset').click(function(){ reset(); tae();})

function validate_form(v){

err = false;
if(v==1)
	{
		if($('#f_type_cat').val()=='')
		{
		err = true;
		$('#f_type_cat_div').addClass('has-error');
		}
	else
		{
		$('#f_type_cat_div').removeClass('has-error');
		}
		return err;
	}
else if(v==0)
	{

		if($('#f_type_subcat').val()=='')
		{
		err = true;
		$('#f_type_subcat_div').addClass('has-error');
		}
		else
		$('#f_type_subcat_div').removeClass('has-error');

		if($('#modal_category').val()=='none')
		{
		err = true;
		$('#modal_category_div').addClass('has-error');
		}
		else
		{
		$('#modal_category_div').removeClass('has-error');
		}
		return err;
	}


else
	{
		return true;
		alert("error v="+v);

	}
}





function reset(){
	//tae('All fields has been cleared')
	$('#btn_save').val('create');
	$('#f_type_cat').val("");
	$('#f_type_cat_div').removeClass('has-error');
	$('#btn_save1').val('create');
	$('#f_type_subcat').val("");
	$('#modal_category').val('none');
	$('#f_type_subcat').removeClass('has-error');
	$('#modal_category_div').removeClass('has-error');
	$('#f_type_subcat_div').removeClass('has-error');
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






function table_row_del(id,d){
if(d==1)
	{
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
		url: "../../../model/subcat/delete.php",
		data: 'id='+id,
		dataType: 'json',
		cache: false,
		success: function(s){}
	});
	//ajax end
		reset();
		populate_table_main(1);

  } else {
		reset();
    swal("Cancelled", "User Cancelled", "error");
  }
});

	}
else if(d==0)
	{
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
		url: "../../../model/subcat/delete1.php",
		data: 'id='+id,
		dataType: 'json',
		cache: false,
		success: function(s){}
	});
	//ajax end
		reset();
		populate_table_main(0);

  } else {
		reset();
    swal("Cancelled", "User Cancelled", "error");
  }
});
	}
else
	{
		reset();
		alert("error d="+d);
	}

}




$('#btn_save').click(function(){

if(validate_form(1)==true){}
else{

	var category =$('#modal_equip_type').val();
	var id =cont_id ;
	var type =$('#f_type_percent').val();


	var dataString = 'category='+category+'&type='+ type+'&id='+ id;



	console.log(dataString);

	if(this.value=='create'){ //CREATE MODE
		//ajax now
		$.ajax ({
			type: "POST",
			url: "../../../model/part_item-trans/create.php",
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
			$("#cat").modal("hide");
			populate_table_main(1);
				}
	else{ //UPDATE MODE
		var id = this.value;
		//ajax now
		$.ajax ({
			type: "POST",
			url: "../../../model/subcat/update.php",
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
			$("#cat").modal("hide");
			populate_table_main(1);

	}
}



})

$('#btn_save1').click(function(){

if(validate_form(0)==true){}
else{

		var code = $('#f_code').val();
		var part = $('#f_part').val();
		var id =cont_id 
		var desc = $('#f_desc').val();
		var amnt = $('#f_amnt').val();
		var pert = $('#f_pert').val();
		var dataString = 'code='+code+'&part='+part+'&desc='+desc+'&amnt='+amnt+'&pert='+pert+'&id='+id;

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
			$("#subcat").modal("hide");
			populate_table_main(0);
				}
	else{ //UPDATE MODE
		var id = this.value;
		//ajax now
		$.ajax ({
			type: "POST",
			url: "../../../model/subcat/update1.php",
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
			$("#subcat").modal("hide");
			populate_table_main(0);
	}
}



})

function populate_cat(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/part_item-trans/populate_part.php",
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#modal_equip_type');
			        c.empty();
			        c.html('<option selected="selected" value="none">-Part-</option>');
			        for(var i = 0; i < s.length; i++) {
			          let iselected = '';
			          if(s[i][0] == selector){ iselected='selected' }
			          c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}
function populate_cats(selector){
			//ajax now
			$.ajax ({
			  type: "POST",
			  url: "../../../model/part_item-trans/populate_part-trans.php",
  			data:"cont_id="+cont_id ,
			  dataType: 'json',
			  cache: false,
			  success: function(s){
			  		var c = $('#f_part');
			        c.empty();
			        c.html('<option selected="selected" value="none">-Part-</option>');
			        for(var i = 0; i < s.length; i++) {
			          let iselected = '';
			          if(s[i][0] == selector){ iselected='selected' }
			          c.append('<option value='+s[i][0]+'>'+s[i][1]+'</option>');
			        }


			  }
			});
		}


$('#subAdd').click(function(){
//	var cat = $('').val();
	populate_cat();
});
