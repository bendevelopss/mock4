<?php
//edited
if(!isset($_SESSION))
  { session_start();}
ini_set('display_errors',1);
error_reporting(E_ALL & ~E_NOTICE);


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("view/master/design_index.html");//header and design
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
    <style type="text/css">
    no-js #loader { display: none;  }
    .js #loader { display: block; position: absolute; left: 100px; top: 0; }
    .se-pre-con {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(assets/img/2.gif) center no-repeat #fff;
    }

  </style>
  <body>

    <!--pre-loader start-->
    <div class="se-pre-con"></div>
    <div class="notify"></div>
    <!--pre-loader end-->

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
                  <!-- <li><a href="view/maintenance/labor/main.php">Labor</a></li> -->
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
            <!-- <li><a href="view/transaction/safety/main.php">Safety Officer</a></li> -->
            <li><a href="view/transaction/PI/main.php">Project Engineer</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Records <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu" style="background-color: grey;">
           <li><a href="view/transaction/project/main.php">Projects</a></li>
           <!-- <li><a href="view/transaction/photo/main.php">Photo Gallery</a></li> -->
           <li><a href="view/transaction/progress/main.php">Reports</a></li>
         </ul>
       </li>

       <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;</i> <?php echo "$persan_user_type"; ?><span class="caret"></span></a>

        <ul class="dropdown-menu" role="menu" style="background-color: grey;">
          <li><a href="view/others/account/main.php">My Account</a></li>
          <li><a href="#" onClick="return logout1();">Logout</a></li>
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
    <div class="col-lg-10s">
     <h2><?php echo(strtoupper($persan_user_type)); ?> DASHBOARD</h2>   
   </div>
   <hr>
   <div class="row">
    <div class="col-xs-12">
      <div class="alert alert-info">
        <strong>Welcome <?php echo($persan_user_type).', ';?></strong> Select On the Menu Below
      </div>

    </div>
  </div>
</div>

<h4 class="page-head-line">LATEST PROJECTS</h4>




<a href="">
 <div class="row">
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-one">
      <i class="fa fa-folder-open fa-3x" style="padding-bottom: 15px"></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        </div>

      </div>
      <h5>PROJECT 1 </h5>
    </div>
  </div>

</a>

<a href="">
 <div class="col-md-3 col-sm-3 col-xs-6">
  <div class="dashboard-div-wrapper bk-clr-two">
    <i class="fa fa-folder-open fa-3x" style="padding-bottom: 15px"></i>
    <div class="progress progress-striped active">
      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
      </div>

    </div>
    <h5>PROJECT 2 </h5>
  </div>
</div>

</a>
<a href="users.html">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-three" >
      <i  class="fa fa-folder-open fa-3x" style="padding-bottom: 15px"></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        </div>
      </div>
      <h5>PROJECT 3 </h5>
    </div>
  </div>
</a>

<div class="content-wrapper">
  <div class="container">
   <div class="row">
    
    
   </div>
   
   <h4 class="page-head-line">TRANSACTION</h4>

   


   <a href="view/transaction/steps/main_contract.php">
     <div class="row">
       <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-one">
          <i class="fa fa-folder-open-o fa-3x" style="padding-bottom: 15px"></i>
          <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            </div>

          </div>
          <h5>CREATE PROJECT </h5>
        </div>
      </div>

    </a>

    <a href="view/transaction/PM/main.php">
     <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="dashboard-div-wrapper bk-clr-two">
        <i class="fa fa-users fa-3x" style="padding-bottom: 15px"></i>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
          </div>

        </div>
        <h5>LIST OF CONTRACTS</h5>
      </div>
    </div>

  </a>
  <a href="view/transaction/PI/main.php">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="dashboard-div-wrapper bk-clr-three" >
        <i  class="fa fa-book fa-3x" style="padding-bottom: 15px"></i>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
          </div>
        </div>
        <h5>LIST OF PROJECTS</h5>
      </div>
    </div>
  </a>


</div>


</div>
</a>

<div class="content-wrapper">
  <div class="container">

    <h4 class="page-head-line">MAINTENANCE</h4>
    


    <a href="view/maintenance/equipment/main.php">
     <div class="row">
       <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-one">
          <i class="fa fa-truck fa-3x" style="padding-bottom: 15px"></i>
          <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            </div>

          </div>
          <h5>EQUIPMENT </h5>
        </div>
      </div>

    </a>

    <a href="view/maintenance/materials/main.php">
     <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="dashboard-div-wrapper bk-clr-two">
        <i class="fa fa-wrench fa-3x" style="padding-bottom: 15px"></i>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
          </div>

        </div>
        <h5>MATERIALS </h5>
      </div>
    </div>

  </a>
  <a href="view/maintenance/client/main.php">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="dashboard-div-wrapper bk-clr-three" >
        <i  class="fa fa-users fa-3x" style="padding-bottom: 15px"></i>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
          </div>
        </div>
        <h5>CLIENT </h5>
      </div>
    </div>
  </a>

  <a href="view/maintenance/employee/main.php">
    <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="dashboard-div-wrapper bk-clr-four" style="vertical-align: middle;">
        <i  class="fa fa-user-plus fa-3x" style="padding-bottom: 15px"></i>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
          </div>
        </div>
        <h5>EMPLOYEE </h5>
      </div>
    </div>
  </a>
</div>

<div class="content-wrapper">
  <a href="view/maintenance/scope/main.php">
   <div class="row">
     <div class="col-md-3 col-sm-3 col-xs-6">
      <div class="dashboard-div-wrapper bk-clr-one">
        <i class="fa fa-file-archive-o fa-3x" style="padding-bottom: 15px"></i>
        <div class="progress progress-striped active">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
          </div>

        </div>
        <h5>SCOPE OF WORK </h5>
      </div>
    </div>

  </a>

  <a href="view/maintenance/subcontractor/main.php">
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-two">
      <i class="fa fa-user fa-3x" style="padding-bottom: 15px"></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
        </div>

      </div>
      <h5>SUBCONTRACTOR </h5>
    </div>
  </div>

</a>
<a href="view/maintenance/part/main.php">
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="dashboard-div-wrapper bk-clr-three" >
      <i  class="fa fa-sitemap fa-3x" style="padding-bottom: 15px"></i>
      <div class="progress progress-striped active">
        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
        </div>
      </div>
      <h5>PART </h5>
    </div>
  </div>
</a>



</div>

<div class="content-wrapper">
  <div class="container">
   <div class="row">
    
    
   </div>
   
   <h4 class="page-head-line">UTILITIES</h4>

   


   <a href="view/others/manage/main.php">
     <div class="row">
       <div class="col-md-3 col-sm-3 col-xs-6">
        <div class="dashboard-div-wrapper bk-clr-one">
          <i class="fa fa-users fa-3x" style="padding-bottom: 15px"></i>
          <div class="progress progress-striped active">
            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
            </div>

          </div>
          <h5>MANAGE USERS </h5>
        </div>
      </div>

    </a>




  </div>

</a>
</div>

<?php include("view/master/design_end_index.html"); //footer?>  

</body>
</html>

<script type="text/javascript">
  $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");;

      });
    </script>

    <script type="text/javascript">

      $.notify("Hello World");
    </script>