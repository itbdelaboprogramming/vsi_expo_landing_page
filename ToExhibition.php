<?php
session_start();
if(isset($_SESSION["logincheckfff"])==false) {
    $no_login_url = "http://nakayamairon.com/Exhibition/";
   session_write_close();
header("Location: {$no_login_url}");
   exit;
}
?>
