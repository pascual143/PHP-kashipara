<?php
include("connection.php");

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
      padding:5px;
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

<body><h2>
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
<h1>Job Profiles</h1>
<table id="loginContent" border="3" cellpadding="5px">        
        <tbody><th>Photo</th><th>First Name</th><th>Last Name</th><th>Date of Birth</th><th>Gender</th><th>Address</th><th>Mobile</th><th>E-mail ID</th><th>Pin Code</th><th>Resume</th>
        	<?php
        	$con=makeconnection();
$sql="select * from applicant";
$qry=mysqli_query($con,$sql);
while ($rs=mysqli_fetch_array($qry)) {
	$id=$rs['username'];

        	?>
		<tr>
			<td><img src="../photo/<?php echo $id;?>.jpg" height="100px" width=100px" /></td>
		<td><?php echo $rs['fname'];?></td>
		<td><?php echo $rs['lname'];?></td>
		<td><?php echo $rs['dob'];?></td>
		<td><?php echo $rs['gender'];?></td>
		<td><?php echo $rs['address'];?></td>
		<td><?php echo $rs['mobile'];?></td>
		<td><?php echo $rs['email'];?></td>
		<td><?php echo $rs['pin'];?></td>
    <td><a href="../resume/<?php echo $id;?>.pdf">Resume</a></td>

        </tr>
      <?php  
   }?>             
      
    </tbody></table>
	</body>
	</html>