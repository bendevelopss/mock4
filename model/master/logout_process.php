<?php
// remove all session variables
//session_start();
  if(!isset($_SESSION))
  { session_start();}
session_unset();

// destroy the session
session_destroy();
      ?>
<script type="text/javascript">
function Redirect()
{
window.location="../../view/master/login.php";
}
setTimeout('Redirect()', 0);
</script>
