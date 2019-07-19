<?php
include 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$con=makeconnection();

	$sql="SELECT * FROM applicant WHERE username='$username' AND pwd='$password'";
	$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['appid']=$row[0];
$_SESSION['username']=$row['username'];
	 echo "<script>
alert('Login Successfull');
window.location.href='dashboard.php';
</script>";
}else{
//$message="<font color=red>Invalid login Try Again</font>";
echo "<script>alert('Invalid Login');</script>";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
ul {
    background-color: #dddddd;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: orange;
}

li {
    float: left;
    margin-left: 100px;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
body
{
    background-repeat:repeat-x;
}
/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
}
}
</style>
</head>

<body>
       <ul>
           <h3><h1 style= "text-align:center;background: orange;box-shadow: 10px 5px;border-radius: 10px;">JOB SITE</h1></li>
            </ul>

<body id="subpage" >

<?php include "menu.php";?>
<div id="main">
<center><h1>Applicants Login </h1>
<button style="background:#0f0;"><a href="registration.php"><font color="blue">Register Here</font></a></button>
  <section class="container">
  <center>
     <div class="login">
	 <img src="images/login_img.gif" height="150" width="300">
      <form method="post" action="login.php">
		    <h3>Username    :<input type="text" name="username" value="" style="height:30px;" placeholder="Username">
        <p> <h3>Password :<input type="password" name="password" style="height:30px;" placeholder="Password">  <br/>
        <br/><p class="submit"><input type="submit" name="submit" style="height:30px;width:100px;border-radius:20px;background:#0f0" value="Login"></h1>  <br/>
      </form>
    </div>
	</center>
    </section>
</div>
</div>
</body>
</html>