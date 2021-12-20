<?php 
$name = trim($_POST['name']);
 $email = trim($_POST['email']);  
 //$ip = $_POST['ip'];
$message = $_POST['message'].'<br/><br/>Email: '.$email .'<br/> Date: '.date('H:i:s Y-m-d');$to      = 'kamran.noori.nejad@gmail.com';$subject = 'New Message from '.$name;$headers  = 'MIME-Version: 1.0' . "\r\n";$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";$headers .= 'From: itskamran.ir' . "\r\n" .    'Reply-To: '.$email  . "\r\n" .    'X-Mailer: PHP/' . phpversion();

if(isset($name) && isset($email)){
  if(mail($to, $subject, $message, $headers))
    echo 'Thanks For Your Comment!'; 
}
else
 echo 'Sorry! Something is Getting Wrong! Didi You Fill The Form Correctly???';
?>