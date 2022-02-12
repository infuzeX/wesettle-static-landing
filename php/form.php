<?php
include('./db.php');
include('../smtp/PHPMailerAutoload.php');

$Fname = $_POST['Fname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$area = $_POST['area'];
$whatsapp = $_POST['whatsapp'];
if(!isset($_POST['whatsappUpdate'])){
    $whatsappUpdate = 'No';
}
else{
    $whatsappUpdate = $_POST['whatsappUpdate'];
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `form`(`name`, `phone`, `email`, `area`, `updates_on_whatsapp`, `whatsapp_updates`) VALUES ('$Fname','$phone','$email','$area','$whatsapp','$whatsappUpdate')";

if ($conn->query($sql) === TRUE) {

    $mailHtml="
                  <p>
                  <br>
                  Name : $Fname<br>
                  Phone Number : $phone<br>
                  Email-id : <a href='mailto:$email'>$email</a><br>
                  Area : $area<br>
                  Get Updates on Whatsapp : $whatsappUpdate
                  </b>
                  </p>
              ";
    $email_id = 'leads.wesettle@gmail.com';
    // smtp_mailer("mail-id of the user", subject , text inside the mail)
	smtp_mailer($email_id,'User query',$mailHtml);          
    echo '<script>
    alert("We will call you back as soon as possible.");
    window.location.href = "../";
    </script>';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

function smtp_mailer($to,$subject, $msg){
    $mail = new PHPMailer(); 
    // $mail->SMTPDebug  = 3;
    $mail->IsSMTP(); 
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'ssl'; 
    // $mail->Host = "smtp.domain_name.com or .in etc
    $mail->Host = "smtp.zoho.in";
    $mail->Port = 465; 
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    // $mail->Username = "mail-id from which you want to send the mail
    $mail->Username = "form.wesettle@zohomail.in" ;
    // $mail->Password = "password of mail account from which you want to send the mail
    $mail->Password = "edsyP8b9hFXw" ;
    // $mail->SetFrom = ("mail-id from which you want to send the mail)
    $mail->SetFrom("form.wesettle@zohomail.in");
    $mail->Subject = $subject;
    $mail->Body =$msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions=array('ssl'=>array(
      'verify_peer'=>false,
      'verify_peer_name'=>false,
      'allow_self_signed'=>false
    ));
    if(!$mail->Send()){
      $mail->ErrorInfo;
    }else{
      return 'Sent';
    }
  }

$conn->close();
?>
