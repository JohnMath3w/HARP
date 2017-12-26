<?php
session_start();
include_once('config.php'); 
$user=$_POST['username'];
	$pass=$_POST['password'];
	
	
	$sql="SELECT loginid FROM login WHERE username='$user' and password='$pass'";
$query=mysql_query($sql,$dbcon);
$count=mysql_num_rows($query);
$row=mysql_fetch_row($query);

	$userid=$row[0];
	
if($count==1)
{


if($userid=='admin')
{
	
	$_SESSION['username']=$user;
	header("location:schedule.php");

}


}
else{
		
		echo"email or password is incorrect.<br>click here to <a href='index.html'>try again</a>";
}



?>
