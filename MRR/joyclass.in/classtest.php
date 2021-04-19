<?php

//require_once "vendor/autoload.php";

//$mail =new PHPMailer;

$servername="bh-ht-3";
$username="joycaree";
$password="shabbu57.1";
$dbname="joycaree_joyclass";

$name=$_POST["name"];
$email=$_POST["email"];
$telephone=$_POST["telephone"];
$message=$_POST["userMsg"];

/*
$mail->From='$email';
$mail->FromName='$name';
//$mail->setFrom('shettyroopa401@gmail.com','shetty');
$mail->addAddress('rraki8434@gmail.com','raki');
$mail->isHTML(true);
$mail->Subject='hi form';
$mail->Body='hi s php';

if(!$mail->send())
{
echo "Mailer Error: " . $mail->ErrorInfo;}
else
{
echo "sent";
}*/

if(isset($_POST["submit"]))
{

	$to="info@joyclass.in";
	$subject=" Student Details";
	$message="hi ";
	$headers="rrakie514@gmail.com";

	mail($to,$subject,$message,$headers);
  
   	echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
}

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
die("connection failes:".mysqli_connect_error());
}



/*
{

$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
if(@mail($email_to, $email_sub, $email_msg, $headers)) 



if(mail($to,$sub,$msg,$email))
{
	echo " sent succesful";
}
else
{
 	echo "something wrong";
}
}*/


/*echo " sql connected";
echo $name;
echo $email;
echo $message;*/

$sql="insert into joycontact values('$name','$email','$telephone','$message')";
//$r=mysqli_query($conn,$sql);
//if(!$r){

if($conn->query($sql)){

echo '<script language="text/javascript"  onclick="close()">';

echo 'alert("Thanks for your Response")';


echo '</script>';
}
else
{
echo '<script language="javascript">';
echo 'alert("Go back and Enter proper details")';
echo '</script>';

}

/*
$mail->setFrom('shettyroopa401@gmail.com','shetty');
$mail->addAddress('rraki8434@gmail.com','raki');
$mail->Subject='hi form';
$mail->Body='hi s php';

if(!$mail->send())
{
echo "not sent";
}
else
{
echo "sent";
}


*/

    
    
    
 
     $mailto="info@joyclass.in";
        $file="index.html";
        $pcount=0;
        $gcount=0;
        $subject = "Mail from Enquiry Form";

        $from="$email";
        while (list($key,$val)=each($_POST))
        {
        $pstr = $pstr."$key : $val \n ";
        ++$pcount;

        }
        while (list($key,$val)=each($_GET))
        {
        $gstr = $gstr."$key : $val \n ";
        ++$gcount;

        }
        if ($pcount > $gcount)
        {
        $message_body=$pstr;
        mail($mailto,$subject,$message_body,"From:".$from);

        include("$file");
        }
        else
        {
        $message_body=$gstr;
		
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        mail($mailto,$subject,$message_body,"From:".$from);
        include("$file");
        }
    
    
    
    
    if (isset($_POST["submitform"]))
    {   
    echo'
<script type="text/javascript">
window.location = "http://joyclass.in/index.html";
</script> ';     
    
    }

$conn->close();


?>