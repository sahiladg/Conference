<?php 
session_start();
?>
<?php
$as=$_SESSION['_user'];
//$c1=$_SESSION['course'];
//echo $c1;
if(isset($_POST))
{
  
  $c12=$_POST['cor'];
 
//  $_SESSION['course'] = $c12;
}
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$con=mysqli_connect("localhost","root","","cu");
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$sql = "select email from student where cid1='$c12'";
$result = mysqli_query($con,$sql);
$receipent = [];
if($result){
    while($row = mysqli_fetch_array($result)) {
        $receipent[] = $row; 
    }    
}

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'sahil2310199610@gmail.com';                 // SMTP username
    $mail->Password = 'gmail1996';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('sahil2310199610@gmail.com', 'Sahil');
	$data = [];
	foreach($receipent as $data){
		$mail->addAddress($data['email']);
	}

    //Attachments
 //   $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
 //   $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	
	//echo $as;
	$body = '<p><b>Hello,</b><br>Please join us on this live webinar.<br><br>
				You can join video - conferencing with dashboard by clicking on below link 
				http://localhost:9001/demos/dashboard/
				and join room by entering Id : '.
				$as.'<br>
                <br>
				You can join one way video - broadcasting  by clicking on below link 
				http://localhost:9001/demos/Video-Broadcasting.html
				and join room by entering Id : '.
				$as.'<br>
				</p>';// write name of student and link for webinar
    
	//Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Invitation to join live Webinar';
    $mail->Body    =  $body;
    $mail->AltBody =  strip_tags($body);

    $mail->send(); ?>
	<html>
	<h1>Your notification has been sent to the student</h1>
	<a href="admin.php">Back to create conference</a>
	</html>
	<?php
   // header('admin.php');
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

 header('admin.php');
?>