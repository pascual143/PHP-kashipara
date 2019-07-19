<?php

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JOB SITE</title>
<link href="css/slider.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<link rel="stylesheet" type="text/css" href="css/styles.css" />

<script language="javascript" type="text/javascript">

	function clearText(field)
	{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
	}
</script>

</head>

<body id="subpage">

<div id="main_wrapper">
	<div id="main_header">
        
        <div id="header_right">
           
         </div> <!-- END -->
    </div> <!-- END of header -->
     <div id="main_menu" class="ddsmoothmenu">
        <ul>
           <h3><h1 style= "text-align:center;background: orange;box-shadow: 10px 5px;border-radius: 10px;">JOB SITE</h1></li>
			</ul>
   
        <br style="clear: left" />
    </div> <!-- end of menu -->
    
    <div class="cleaner h20"></div>
    <div id="main_top"></div>
    <div id="main">
    	
        <div id="content">
       		
			</div>
			
  <script>
function validateForm()
{

//for alphabet characters only
var str=document.form1.fname.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("First Name Cannot Contain Numerical Values");
	document.form1.fname.value="";
	document.form1.fname.focus();
	return false;
	}}
	
if(document.form1.fname.value=="")
{
alert("Name Field is Empty");
return false;
}

//for alphabet characters only
var str=document.form1.lname.value;
	var valid="abcdefghijklmnopqrstuvwxyz ABCDEFGHIJKLMNOPQRSTUVWXYZ";
	//comparing user input with the characters one by one
	for(i=0;i<str.length;i++)
	{
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(valid.indexOf(str.charAt(i))==-1)
	{
	alert("Last Name Cannot Contain Numerical Values");
	document.form1.lname.value="";
	document.form1.lname.focus();
	return false;
	}}
	

if(document.form1.lname.value=="")
{
alert("Name Field is Empty");
return false;
}

}

</script>
 <script type="text/javascript">
 var mob=document.form1.getElementByName('mob');
 if(mob.length != 10) {
    window.alert("Phone number must be 10 digits.");
    mob.focus();
    return false;
}
</script>
 <script type="text/javascript">

    function valid(){
		//var str=document.form1.first_name.value;
        var pin=document.form1.pin.value;
		//var valid=
	//charAt(i) returns the position of character at specific index(i)
	//indexOf returns the position of the first occurence of a specified value in a string. this method returns -1 if the value to search for never ocurs
	if(pin.length<7 && pin.length>7)
	{
	alert("Pin code should contain 6 digits");
	document.form1.first_name.value="";
	document.form1.first_name.focus();
	return false;
	}
        var user_mobile=document.getElementById("phone");
        var pat1=/^([0-9](6,6)+$/;
        var pattern=/^([0-9](10,10))+$/;
        var filter=/^([a-z A-Z 0-9 _\.\-])+\@(([a-z A-Z 0-9\-])+\.)+([a-z A-z 0-9]{3,3})+$/;

        if (!filter.test(user_id.vlaue)) {
            alert("Email is in www.gmail.com format");
            user_id.focus();
            return false;
        }
        if (!pattern.test(user_mobile.value)) {
            alert("Phone nubmer is in 0123456789 format ");
            user_mobile.focus();
            return false;
        }
        if (!pat1.test(pin_code.value))  {
            alert("Pin code should be 6 digits ");
            pin_code.focus();
            return false;
        }
    }
</script>
<style type="text/css">
	.sub
	{

		height: 50px;
		width: 90px;
		background: orange;
		border-radius: 10px;
		box-shadow: 10px 5px;
		border-color: green;
		font-size: 20px;

	}
</style>
</head>
<body bgcolor="green">
<center></Center>
<?php


include('connect_db.php');
if(isset($_POST['btnreg']))
{
	$flag=1;
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$date=$_POST['date'];
	$gender=$_POST['gender'];
	$add=$_POST['address'];
	$mob=$_POST['mob'];
	$email=$_POST['email'];
	$pin=$_POST['pin'];
	$usr=$_POST['user'];
	$img=$_FILES['file']['tmp_name'];
	$res=$_FILES['res']['tmp_name'];
	$pass=$_POST['Password'];
	$con=$_POST['Confirm'];
	$count=strlen($pin);
	$count2=strlen($mob);
	$count3=strlen($pass);
	$count3=strlen($con);
	 if($count2!=10) {
    echo "<script>alert('Phone number must be 10 digits.');</script>";
	$flag=0;
    //return false;
}
	/* if($count2!=10)
	{
	echo "<script>alert('Mobile Number Should Contain 10 digits');</script>";
	}*/
	if($count3<8)
	{
	echo "<script>alert('Password should contain 8 characters');</script>";
	$flag=0;
	}
	if($count<6)
	{
	echo "<script>alert('Pin code should contain 6 digits');</script>";
	$flag=0;
	}
	 if($pass!=$con)
	{
		echo "<script>alert('Confirm Password and Password Should Match');</script>";
		$flag=0;
	}
 if (!preg_match("/^[a-zA-Z ]*$/",$fname)) {
  echo "<script>alert('Only letters and white space allowed');</script>"; 
  $flag=0;
}
if (!preg_match("/^[a-zA-Z ]*$/",$lname)) {
  echo "<script>alert('Only letters and white space allowed');</script>";
$flag=0;  
}
 if (!preg_match("/^[a-zA-Z ]*$/",$usr)) {
  echo "<script>alert('Only letters and white space allowed');</script>";
$flag=0;  
} 
	$con=makeconnection();
	if($flag!=0)
	{
	$qq="insert into applicant(fname,lname,dob,gender,address,mobile,email,pin,username,photo,resume,pwd) values('$fname','$lname','$date','$gender','$add','$mob','$email','$pin','$usr','$img','$res','$pass')";
$sql=mysqli_query($con,$qq);
 if($sql>0)
 {
 	move_uploaded_file($_FILES['file']['tmp_name'],"photo/$usr.jpg");
 	move_uploaded_file($_FILES['res']['tmp_name'],"resume/$usr.pdf");
	 echo "<script>
alert('Applicant Information Registered Successfully');
window.location.href='index.php';
</script>";
 }
	}
}

?>
<center>
	<form name="form1" onsubmit="return validateForm(this);" action="registration.php" method="post" enctype="multipart/form-data" >
<table height="100">
<tr><td><h3>First Name: <td><input type="text" name="fname" required="required"/>
<tr><td><h3>Last Name: <td><input type="text" name="lname" required="required" />
 <?php
	  

	  ?>
<tr><td><h3>Date Of Birth <td> <input type="date" name="date" max="<?php echo $dt1;?>" required="required"/>
<tr><td><h3>Gender:<td><input name="gender" type="radio" value="Male"/>Male
<input type="radio" name="gender" value="Female">Female
<tr><td><h3>Contact No: <td><input type="number" min="7000000000" max="9999999999" id="phone" name="mob" required="required"/>
<tr><td><h3>Address:<td><textarea name="address" required="required"></textarea>
<tr><td><h3>Email ID:<td><input type="email" name="email" /><br />
<tr><td><h3>PIN:<td><input type="text" id="pin" name="pin" required="required"/>
<tr><td><h3>User Name:<td><input type="text" name="user" required="required"/><br />
	<tr><td><h3>Upload Photo:<td><input type="file" name="file" required="required"/><br />
			<tr><td><h3>Upload Resume:<td><input type="file" name="res" required="required"/><br />
<tr><td><h3>Password:<td><input type="password" name="Password" required="required"/>
<tr><td><h3>Confirm Password:<td><input type="password" name="Confirm" required="required"/>
<tr><td><h3><input type="submit" value="Register" class="sub" name="btnreg"/>&nbsp;
<b><td><input type="reset" class="sub" name="btnreset"/>
</b>
</form>
</center>
<div>
<tr><td>
<div>
</div>
<div>
<td>
</div>




</body>
</html> 