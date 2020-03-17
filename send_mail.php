<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$msg=$_POST['msg'];

		$to='xyz.123@mail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo"<script type='text/javascript'>alert('Message Sent Successfully!');
        window.history.go(-1);
        </script>";
		}
		else{
			echo "Something went wrong!";
        }
        
	}
?>