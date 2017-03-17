<?php
session_start();
if (isset($_SESSION['user']) !=""){
	header('location:../index.php');
}
?>
<link href="../css/login.css" rel="stylesheet" type="text/css" media="all" />
<link rel="shortcut icon" href="../../images/icon.ico" />

<div id="login">
  <form action="LoginPeriksa.php" method="post">
    <h1>Sign In</h1>
    <input type="text" placeholder="Username" name="TxtUser" id="user">
    <input type="password" placeholder="Password" name="TxtPasswd" id="pass">
    <button>Sign in</button>
  </form>
</div>
  