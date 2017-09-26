<?php include('../../../controller/master/log.php');


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
    background: url(../../../assets/img/2.gif) center no-repeat #fff;
}
</style>

<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Bidding System with Monitoring Projects System </title>
    <!-- BOOTSTRAP CORE STYLE -->
    <link href="../../../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="../../../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="../../../assets/css/style.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="../../../plugins/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../plugins/sweetalert/dist/sweetalert.css">
     <!--JQUERY BELOW-->
    <script src="../../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!--Datatables BELOW-->
    <script src="../../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <!--Datatables Bootsrap CSS BELOW -->
    <script src="../../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!--Datatables Javascript BELLOW -->
    <link href="../../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

    <script src="../../../controller/master/logout.js" type="text/javascript"></script>
    
</head>
<body>
<div class="se-pre-con"></div>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero" style="background-image:url(../../../assets/img/red.jpg); height:200px;">
        <div class="container">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.php">

                    <img src="../../../assets/img/logo.png" style="weight:135px; height:120px" />


                </a>

            </div>
            <div style=" text-align: center; font-size:60pt;
    
    color:#FFFFFF;">
             <p>&nbsp;</p>
              <p><h1 style="font-family: 'Cinzel'; font-size: 75px ">PERSAN Construction Inc.</h1></p>
            </div>
            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">




                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row">
                    <?php include("../../../view/master/sidebar1.php"); ?>


            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
  <!--  <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">EQUIPMENT</h4>

                </div>

            </div>
            <div class="row">-->

<!--**********************************-->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            EQUIPMENT
                        </div>
                        <div class="panel-body">
                            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                              Add New Record
                            </button>
                            <a href="../categories/main.php?types=equipment"><button class="btn btn-primary btn-lg" data-toggle="modal">
                              Category
                            </button></a>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title" id="myModalLabel">EQUIPMENT FORM</h4>
                                        </div>
                                        <div class="modal-body">
                                           <?php include('main_form.html'); ?>
                                        </div>
                                        <div class="modal-footer">
                                         <div class="col-md-2 col-xs-12"><br><button id="btn_reset" class="btn btn-block btn-lg">Reset</button></div>
                                         <div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                     <!-- End Modals-->
<!--**********************************-->


            </div>

            <div class="row">


              <!--   EQUIPMENT POPULATE TABLE -->
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table width="33%" class="table table-striped table-bordered table-hover" id="table_main">
                               <tr><td width="11%" rowspan="3" cellpadding ="50%"><img src="" width="265" height="171" alt="wew"/></image></td><td style="text-align: center"><button>Choose File</button></td></tr>
                               <tr><td>
                                   
<div class="col-sm-4 col-xs-12" id="f_serialnum_div" class='form-group'>
    <label><font color="darkred">*</font>Employee ID</label> <!-- Serial Number -->
     <input type="text" disabled="disabled" class="form-control input-lg" id="f_serialnum" required>
  </div>


                               </td></tr>
                               <tr><td><div class="col-sm-4 col-xs-12" id="f_serialnum_div" class='form-group'>
    <label><font color="darkred">*</font>First Name</label> <!-- Serial Number -->
     <input type="text" disabled="disabled" required class="form-control input-lg" id="f_serialnum">
  </div>
  </td></tr>
                               <tr><td></td><td>
                                   <div class="col-sm-4 col-xs-12" id="f_serialnum_div" class='form-group'>
    <label><font color="darkred">*</font>Last Name</label> <!-- Serial Number -->
     <input type="text" disabled="disabled" class="form-control input-lg" id="f_serialnum" required>
  </div>

                               </td></tr>
                               <tr><td></td><td>
                                   <div class="col-sm-4 col-xs-12" id="f_serialnum_div" class='form-group'>
    <label><font color="darkred">*</font>Username</label> <!-- Serial Number -->
     <input type="text" disabled="disabled" class="form-control input-lg" id="f_serialnum" required>
  </div>

                               </td></tr>

                               <tr><td></td><td>
                                   <div class="col-sm-4 col-xs-12" id="f_serialnum_div" class='form-group'>
    <label><font color="darkred">*</font>New Password</label> <!-- Serial Number -->
     <input type="Password" class="form-control input-lg" id="f_serialnum" required>
  </div>

                               </td></tr>
                               <tr><td></td><td>
                                   <div class="col-sm-4 col-xs-12" id="f_serialnum_div" class='form-group'>
    <label><font color="darkred">*</font>Confirm Password</label> <!-- Serial Number -->
     <input type="Password" class="form-control input-lg" id="f_serialnum" required>
  </div>

                               </td></tr>

                               <tr><td></td><td>
                                    <div class="col-md-2 col-xs-12"><br><button id="btn_save" class="btn btn-block btn-success btn-lg">Save</button></div>
                                        </div>

                               </td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                 <!-- End EQUIPMENT POPULATE TABLE -->
</div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Persan Construction Inc. | By : Students of Polytechnic University of San Juan Campus
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->

    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="../../../assets/js/bootstrap.js"></script>



    <!--<script src="../../../controller/equipments.js" type="text/javascript"></script>-->


<script type="text/javascript">
    $(window).load(function() {
        // Animate loader off screen
        $(".se-pre-con").fadeOut("slow");
    });
</script>
</body>
</html>

<!---->
