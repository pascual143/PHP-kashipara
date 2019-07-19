<?php
function makeconnection()
{
$con=mysqli_connect("localhost","root","","job")or die("cannot connect to server");
return $con;
}
//mysql_select_db('pharmacy')or die("cannot connect to database");
?>