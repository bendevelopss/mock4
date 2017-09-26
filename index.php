<?php
  if(!isset($_SESSION))
  { session_start();}
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


  ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("view/master/design.html");//header and design
if($_SESSION["persan_user_name"]=="" || $_SESSION["persan_user_type"]=="")
  {?>
    <script type="text/javascript">
      function Redirect()
      {
        swal({
    title: "Please Log-in First",
    type: "error",
    showConfirmButton: true,
    closeOnConfirm: false},
    function(){
window.location="view/master/login.php";

  });// alert("Please Log-in");
      }
setTimeout('Redirect()', 0);
      
    </script>
  <?php }
  else{
  $persan_user_name = $_SESSION["persan_user_name"];
  $persan_user_type = $_SESSION["persan_user_type"];
  echo'<input type="hidden" id="persan_user_type" value="'.$persan_user_type.'">';
  }
?>
<body>

<div class="se-pre-con"></div>
    <div  style="background-image:url(assets/img/1.jpg); height:200px width: 100px;">

        <div class="container">
            <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



            </div>

            <div style=" text-align: center; font-size:60pt; color:#FFFFFF;">
              <img src="assets/img/logo.png"; style="height:140px;" />

              <p><h1 style="font-family: 'Cinzel'; font-size: 65px ">PERSAN Construction Inc.</h1></p>
            </div>
            
        </div>
    </div>
    <!-- HEADER END-->
<section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-11">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a class="menu-top" href="index.php">Home</a></li>

                            <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Maintenance <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/maintenance/equipment/main.php">Equipment</a></li>
            <li><a href="view/maintenance/labor/main.php">Labor</a></li>
            <li><a href="view/maintenance/materials/main.php">Materials</a></li>
           <li class="divider"></li>
           <li><a href="view/maintenance/client/main.php">Client</a></li>
           <li><a href="view/maintenance/employee/main.php">Employee</a></li>
           <li class="divider"></li>
            <li><a href="view/maintenance/scope/main.php">Scope of Work</a></li>
            <li><a href="view/maintenance/subcontractor/main.php">Subcontractor</a></li>
            <li><a href="view/maintenance/part/main.php">Part</a></li>
           <!--  <li><a href="view/maintenance/pay_item/main.php">Items</a></li>
 -->          </ul>
        </li>


                            <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Utility <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/others/manage/main.php">Manage Account</a></li>
          </ul>
        </li>
 <li class="dropdown"">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Task <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/transaction/PM/main.php">Project Manager</a></li>
           <li><a href="view/transaction/safety/main.php">Safety Officer</a></li>
          <li><a href="view/transaction/PI/main.php">Project Engineer</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Records <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
           <li><a href="view/transaction/project/main.php">Projects</a></li>
           <li><a href="view/transaction/photo/main.php">Photo Gallery</a></li>
           <li><a href="view/transaction/progress/main.php">Reports</a></li>
          </ul>
        </li>

          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;</i> <?php echo "$persan_user_type"; ?><span class="caret"></span></a>

          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
            <li><a href="view/others/account/main.php">My Account</a></li>
           <li><a href="#" onclick="return logout1();">Logout</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
                </div>
        </div>
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Home</h4>

                </div>
            </div>
             <div class="content-wrapper">
        <div class="container">
            <div class="row">


            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="alert alert-success">
                      <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-long-arrow-right fa-fw"></i> Company Product Price Chart</h3>
                            </div>
                            <div class="panel-body">

<!---->
<!---->
                            </div>
                        </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    </div>
                </div>


            <!-- notification panel-->
                <div class="col-md-4">
                    <div class="notice-board">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Active  Notice Panel
                                <div class="pull-right" >
                                    <div class="dropdown">
                                         <button class="btn btn-success dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                                    <span class="glyphicon glyphicon-cog"></span>
                                                    <span class="caret"></span>
                                        </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Refresh</a></li>
                                                <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Logout</a></li>
                                                </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">


                            </div>
                            <div class="panel-footer">
                                <a href="#" class="btn btn-default btn-block"> <i class="glyphicon glyphicon-repeat"></i> Just A Small Footer Button</a>
                            </div>
                        </div>
                    </div>
                </div>

            <!--notification end-->

            </div>
<?php include("view/master/design_end.html"); //footer?>  
</body>
</html>
 