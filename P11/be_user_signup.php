

<?php


$con=mysqli_connect("localhost","root",""); 
$db_select=mysqli_select_db($con,"CU");	
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}	    
      

$a= $_POST["user"];
$b= $_POST["dep"];
$c= $_POST["name"];
$d= $_POST["id"];
$e= $_POST["email"];
$f= $_POST["pass"];
$g= $_POST["cpass"];

// echo "$a $b $c $d $e $f $g $h $n";
if($f==$g)
{
$qry="INSERT INTO user (flag,department,name,id,password,email) VALUES ('$a','$b','$c','$d','$f','$e')";
$eqry=mysqli_query($con,$qry);	
header("location:login.php");
}else
{
header("location:signup.php");
}
mysqli_close($con);		
?>
