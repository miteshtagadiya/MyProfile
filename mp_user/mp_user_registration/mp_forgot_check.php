<?php
include('../mp_connect.php');


 
	if(isset($_POST['login']))
	{
		
		$email=$_POST['email'];
		$query="select password from mp_registration where email_id='$email'";
		$data=mysqli_query($con,$query);
		$rec=mysqli_fetch_array($data);
		$count=mysqli_num_rows($data);
		
		if($count==1)
		{
			//$pass=$rec['password'];
			//$to="miteshtagadiya@gmail.com";
			//$subject="password";
			//$message="Your Password:".$rec['password'];
			//$header="http://php.net/smtp";
			//$m=ini_set("SMTP",$to);
			//ini_set("smtp_port","25");
			//ini_set('send from','myprofile.com');
			//if($m)
			//{
			//	echo "check your email";
			//}
			ini_set("SMTP","localhost");

			// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
			ini_set("smtp_port","25");

			// Please specify the return address to use
			ini_set('sendmail_from', 'you@yourdomain');
			$encrypt = md5(1290*3+$rec['password']);
            $message = "Your password reset link send to your e-mail address.";
            $to=$email;
            $subject="Forget Password";
            $from = 'info@myprofile.com';
            $body='Hi, <br/> <br/>Your Password is '.$rec['password'].' <br><br>Solve your problems.';
			//Click here to reset your password http://demo.phpgang.com/login-signup-in-php/reset.php?encrypt='.$encrypt.'&action=reset   <br/> <br/>--<br>PHPGang.com<br>
            $headers = "From: " . strip_tags($from) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($from) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			//ini_set('SMTP','localhost');
			//ini_set('smtp_port',25);
			
            mail($to,$subject,$body,$headers);
		}	
			else
			{
				echo "unable to sent";
			}
		
		
		
	}
?>