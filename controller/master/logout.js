

function logout1()
{

swal({
  title: "Do you want to Logout?",
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
    swal("", "User Logged Out", "success");
     window.location="model/master/logout_process.php";
  } else {
    swal("", "User Cancelled", "error");
  }
});

}



function logout2()
{

swal({
  title: "Do you want to Logout?",
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
    swal("", "User Logged Out", "success");
     window.location="../../../model/master/logout_process.php";
  } else {
    swal("", "User Cancelled", "error");
  }
});

}

