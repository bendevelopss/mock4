
<?php include('../../../controller/master/log.php');?>
<!---->
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include("../../../view/master/design.html");//header and design ?>

<body>
<div class="se-pre-con"></div>
<?php include("../../../view/master/design_sidebar.php");//header and design ?>
     <!-- HEADER END-->
                <!--**********************************-->
                            <div class="row" style="padding-top: 25px;">
                <div class="col-md-12">
                    <h4 class="page-head-line">Project Manager</h4>
                        <div class="panel-body">
                       
                <form class="form-signin" method="post" action="test.php">
            <input class="form-control" type="text"  placeholder="User" autofocus="" name="persan_user_name">
            
            <input class="form-control" type="text"  placeholder="Password" name="b1">
            <input class="form-control" type="text"  placeholder="Password" name="b12">
            <input class="form-control" type="text"  placeholder="Password" name="b13">
            <input class="form-control" type="text"  placeholder="Password" name="b2">
            <input class="form-control" type="text"  placeholder="Password" name="b22">
            <input class="form-control" type="text"  placeholder="Password" name="b23">
            <input class="form-control" type="text"  placeholder="Password" name="b3">
            <input class="form-control" type="text"  placeholder="Password" name="b4">
            <input class="form-control" type="text"  placeholder="Password" name="b42">
            <input class="form-control" type="text"  placeholder="Password" name="b43">
            <input class="form-control" type="text"  placeholder="Password" name="b44">
            <input class="form-control" type="text"  placeholder="Password" name="b45">
            <?php
            
            echo "".$_POST["persan_user_name"]."<br>".
            "b1=".$_POST["b1"]." ".(($_POST["b1"]/$_POST["persan_user_name"])*100)."% total<br>".
            "b1=".$_POST["b12"]." ".(($_POST["b12"]/$_POST["b1"])*100)."%<br>".
            "b1=".$_POST["b13"]." ".(($_POST["b13"]/$_POST["b1"])*100)."%<br>".
            "b1=".$_POST["b2"]." ".(($_POST["b2"]/$_POST["persan_user_name"])*100)."% total<br>".
            "b1=".$_POST["b22"]." ".(($_POST["b22"]/$_POST["b2"])*100)."%<br>".
            "b1=".$_POST["b23"]." ".(($_POST["b23"]/$_POST["b2"])*100)."%<br>".
            "b1=".$_POST["b3"]." ".(($_POST["b3"]/$_POST["persan_user_name"])*100)."% total<br>".
            "b1=".$_POST["b4"]." ".(($_POST["b4"]/$_POST["persan_user_name"])*100)."% total<br>".
            "b1=".$_POST["b42"]." ".(($_POST["b42"]/$_POST["b4"])*100)."%<br>".
            "b1=".$_POST["b43"]." ".(($_POST["b43"]/$_POST["b4"])*100)."%<br>".
            "b1=".$_POST["b44"]." ".(($_POST["b44"]/$_POST["b4"])*100)."%<br>".
            "b1=".$_POST["b45"]." ".(($_POST["b45"]/$_POST["b4"])*100)."%<br>";


            ?>
      <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="btn-login">Login</button>
      </form>
      </div>
      </div>
      </div>
      
<?php
echo "HI ".$_POST["persan_user_name"]." ".$_POST["persan_user_password"]; 
include("../../../view/master/design_end.html");//
?>

</body>
</html>

<!---->
