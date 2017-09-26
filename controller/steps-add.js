populate_client()
//reset();
populate_table_main(1);
populate_table_main(0);
//populate_cat();



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
			url: "../../../model/subcat/populate_table_category.php",
			data:"types="+test ,
			dataType: 'json',
			cache: false,
		success: function(s)
				{

					table_category.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_category.fnAddData
							([s[i][0],s[i][1],


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
			url: "../../../model/subcat/populate_table_subcategory.php",
			data:"types="+test ,
			dataType: 'json',
			cache: false,
			success: function(s)
				{

					table_subcategory.fnClearTable();
					for(var i = 0; i < s.length; i++)
						{
							//if(s[i][2]=='inactive'){enability='disabled'}
							table_subcategory.fnAddData
							([s[i][0],s[i][1],s[i][2],


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

$(document).ready(function(){
    var next = 1;
    $(".add-more").click(function(e){
        e.preventDefault();
        var addto = "#field" + next;
        var addRemove = "#field" + (next);
        next = next + 1;
        var newIn = '<input autocomplete="off" class="input form-control" id="field' + next + '" name="field' + next + '" type="text">';
        var newInput = $(newIn);
        var removeBtn = '<button id="remove' + (next - 1) + '" class="btn btn-danger remove-me" style="margin-bottom:20px;">-</button></div><div id="field">';
        var removeButton = $(removeBtn);
        $(addto).after(newInput);
        $(addRemove).after(removeButton);
        $("#field" + next).attr('data-source',$(addto).attr('data-source'));
        $("#count").val(next);  
        
            $('.remove-me').click(function(e){
                e.preventDefault();
                var fieldNum = this.id.charAt(this.id.length-1);
                var fieldID = "#field" + fieldNum;
                $(this).remove();
                $(fieldID).remove();
            });
    });
    

    
});

