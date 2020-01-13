
<?php

$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CU");	

$a= $_POST["email"];
$b= $_POST["password"];


$qry="SELECT * FROM user WHERE email='$a'";
$eqry=mysqli_query($con,$qry);	
$row1 = mysqli_fetch_array($eqry);
$flg=$row1['flag'];

if($a==$row1['email'] && $b==$row1['password'])
{

	
		session_start();
		$_SESSION['_user']= $row1['name'];
		$_SESSION['_id']= $row1['email'];
        $_SESSION['flg']= $flg;
		setcookie("nav",1);
	if($flg=='student')
	{
		header("location:user.php");
	}
	else if($flg=='professor')
	{
		header("location:admin.php");
	}
}
else
{
header("location:login.php");
}

mysqli_close($con);		
?>
