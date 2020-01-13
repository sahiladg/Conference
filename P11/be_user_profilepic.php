
<?php

session_start();

//echo $adr;

if($_FILES['photo']['size'] > 0)
{
	$fileName = $_FILES['photo']['name'];
	$tmpName  = $_FILES['photo']['tmp_name'];
	$fileSize = $_FILES['photo']['size'];
	$fileType = $_FILES['photo']['type'];
	$fp      = fopen($tmpName, 'r');

	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	if(!get_magic_quotes_gpc())
	{
		$fileName = addslashes($fileName);
	}
}
else
{
$content=null;
}

$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CU");	
$adr=$_SESSION['_id'];
$f=$_SESSION['flg'];
		$qry="UPDATE user SET profilepic='$content' WHERE email='$adr'";
		$eqry=mysqli_query($con,$qry);	

mysqli_close($con);	

echo $f;
if($f=='professor')
{
    header("location:admin.php");
}
else 
{
header("location:user.php");
}
?>

