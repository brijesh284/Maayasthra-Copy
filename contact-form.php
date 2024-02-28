<?php


$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$msg=$_POST["message"];



	$to = "praveenrambaludev@gmail.com,vijayalagar27@gmail.com,jobs@maayasthra.com";
 	$message = '<h3>Maayasthra </h3> <p>New form submitted from maayasthra</p>  <b> Name : </b> '. $name . ' <br/><b> Email : </b> '. $email . '<br/><b> Message : </b> '. $msg . '<br/><b> Phone : </b> '. $phone . '<br/>';	

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$subject = 'Form Submission - Maayasthra';
// More headers
$headers .= 'From: noreply@maayasthra.com' . "\r\n";

if(mail($to,$subject,$message,$headers)){
	echo '{ "alert": "alert alert-success alert-dismissable", "message": "Your message has been sent successfully!" }';
}else{
	echo '{ "alert": "alert alert-danger alert-dismissable", "message": "Your message could not been sent!" }';

}

?>