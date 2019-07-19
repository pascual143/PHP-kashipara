<?php
include("connection.php");

?>
<?php
if(isset($_POST['submit']))
{
	$uname=$_POST['myusername'];
	$pwd=$_POST['mypassword'];
	$cn=makeconnection();
$sql="select * from admin where username='$uname' and pwd='$pwd'";
$q=mysqli_query($cn,$sql);
$row=mysqli_fetch_array($q);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
echo "<script>
alert('Login Successful');
window.location.href='dashboard.php';
</script>";
}
else
{
	echo "<script>
alert('Invalid login');
window.location.href='index.php';
</script>";
	
}
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>JoB Portal Admin</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="login.css" />
<script type="text/javascript" src="login.js"></script>

<style type="text/css">

body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-color: #FFFFFF;
}

*{
padding: 0px;
margin: 0px;
}
.bt1
{

    height: 30px;
    width: 200px;
    box-shadow: 10px 10px 10px;
}
.style2 {color: #000000}
.lb1
{
    font-family: TimesNewRoman;
font-style: bold;
color: green;
font-size:30px;
  box-shadow: 10px 10px 10px;
}
#loginContent
{
    border-color: green;
      box-shadow: 10px 10px 10px;
      padding:10px;
      border-spacing: 5px;
}
.sub
{
    height: 50px;
    width: 100px;
    background: green;
    border-radius: 10px;
    font-size: 20px;
}
</style>
</head>

<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><table width="960" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="960" border="0" cellpadding="0" cellspacing="0" bgcolor="#F5F5F5">
          <tr>
            <td height="90" align="left" valign="top"></td>
          </tr>
          <tr>
            <td height="800" align="left" valign="top">
			
			<div align="center" style="margin-top:30px; ">
<h1>Admin Login</h1>
<table id="loginContent" border="5" cellpadding="10px">        
        <tbody><tr>
		<form method="post" action="index.php">
            <td class="tdLabel"><label for="email" class="lb1">Username</label></td>
            <td><input class="bt1" name="myusername" size="25" type="text"></td>
        </tr>
        <tr><tr><tr><br/>
            <td class="tdLabel"><label for="password" class="lb1">Password</label></td>
            <td>
                <input class="bt1" name="mypassword" size="25" 
type="password">                </td>
        </tr>
        
                
        <tr>
            <td>&nbsp;</td>
            <td>
                <input value="Login" class="sub" name="submit" type="submit">
                    </td>
        </tr>        
    </tbody></table>
	</body>
	</html>