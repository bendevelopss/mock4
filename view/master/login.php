<?php
 ini_set('display_errors',1);
 error_reporting(E_ALL &~ E_NOTICE);

 if(!isset($_SESSION))
 { session_start(); }
 
if($_SESSION["persan_user_type"]=="banned")
{?><script type="text/javascript">
window.location="../../view/master/login_fail.html";
</script>
<?php
}
//else
//{
  $count=$_SESSION["counting"];
//}
?>
<!DOCTYPE html>
<html>
<style>
<!--
.login-form h2.form-heading{
  color:#4c565e;
  font-size:24px;
  padding-bottom:20px;
  font-weight:bold;
}

form.custom-form{
  background-color:#ffffff;
  box-shadow:0 1px 3px 0 rgba(0, 0, 0, 0.1);
  text-align:left;
  border-top:2px solid #6caee0;
  padding:40px;
  color:#5f5f5f;
}

.login-form .custom-form .form-group{
  margin-bottom:25px;
}

.login-form .custom-form .form-group input{
  border:1px solid #ccc;
}

.login-form .custom-form button.btn.btn-default.btn-block.dropdown-toggle{
  text-align:left;
  color:#5f5f5f;
  border:1px solid #ccc;
  background:#fff;
}

.login-form .custom-form ul.dropdown-menu{
  width:100%;
  background:#fff;
  color:#5f5f5f;
}

.login-form .custom-form ul.dropdown-menu li a{
  color:#5f5f5f;
  opacity:0.8;
}

.login-form .custom-form ul.dropdown-menu li a:hover{
  background:#fff;
  opacity:1;
}

div.radio{
  margin:14px 0;
}

.login-form .custom-form .submit-button{
  border-radius:2px;
  background:#6caee0;
  color:#ffffff;
  font-weight:bold;
  box-shadow:1px 2px 4px 0 rgba(0, 0, 0, 0.08);
  padding:14px 22px;
  border:0;
  margin:30px auto 0;
  outline:none;
}

.login-card{
  max-width:350px;
  padding:40px 40px;
  background-color:#F7F7F7;
  margin:0 auto 25px;
  margin-top:50px;
  border-radius:2px;
  box-shadow:0px 2px 2px rgba(0, 0, 0, 0.3);
}

.login-card .profile-img-card{
  width:96px;
  height:96px;
  margin:0 auto 10px;
  display:block;
  border-radius:50%;
}

.login-card .profile-name-card{
  font-size:16px;
  font-weight:bold;
  text-align:center;
  margin:10px 0 0;
  min-height:1em;
}

.login-card .reauth-email{
  display:block;
  color:#404040;
  line-height:2;
  margin-bottom:10px;
  font-size:14px;
  text-align:center;
  overflow:hidden;
  text-overflow:ellipsis;
  white-space:nowrap;
  box-sizing:border-box;
}

.login-card .form-signin input[type=email], .login-card .form-signin input[type=password], .login-card .form-signin input[type=text], .login-card .form-signin button{
  height:44px;
  font-size:16px;
  width:100%;
  display:block;
  margin-bottom:10px;
  z-index:1;
  position:relative;
  box-sizing:border-box;
}

.login-card label{
  color:#000000;
}

.login-card .form-signin .form-control:focus{
  border-color:rgb(104, 145, 162);
  outline:0;
  -webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
  box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.login-card .btn.btn-signin{
  font-weight:700;
  height:36px;
  line-height:36px;
  font-size:14px;
  background:rgb(104, 145, 162);
  border-radius:3px;
  border:none;
  transition:all 0.218s;
  padding:0;
}

.login-card .btn.btn-signin:hover, .login-card .btn.btn-signin:active, .login-card .btn.btn-signin:focus{
  background:rgb(12, 97, 33);
}

.login-card .forgot-password{
  color:rgb(104, 145, 162);
}

.login-card .forgot-password:hover, .login-card .forgot-password:active, .login-card .forgot-password:focus{
  color:rgb(12, 97, 33);
}


body {
background-image:url("../../assets/img/cream.jpg");
background-repeat:no-repeat;
background-attachment:scroll;
background-size: cover;


}

-->
</style>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>

<body>
<div class="wrapper">



<div id="head-txt">
  <br>
  <h1 align='center'>PERSAN Construction Inc.</h1>





    <div class="login-card"><center>
      <img  align="middle" name="icon" src="../../assets/img/bulb.gif" width="80%" " alt=""></center>
      <p class="profile-name-card"> </p>
        <form class="form-signin" method="post" action="../../model/master/login_process.php">
            <input class="form-control" type="text" required="" placeholder="User" autofocus="" name="persan_user_name">
            <input class="form-control" type="password" required="" placeholder="Password" name="persan_user_password">
			<button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" name="btn-login">Login</button>
          <?php if($count>0)
          {echo "Number of tries: ".$count."<br><font color='red'>Warning you wil be banned if you reach 3 tries</font>";}

          if($count>=3)
          {//startbanning ang try count
          $_SESSION["persan_user_type"]="banned";
          ?><script type="text/javascript">
          window.location="../../view/master/login_fail.html";
          </script>
          <?php
          }//end banning and try count
          ?>
	       <input type="text" style="visibility:hidden" name='count' value="<?=$count?>">


</body>

</html>
