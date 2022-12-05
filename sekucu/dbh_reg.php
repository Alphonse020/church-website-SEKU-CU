<?php


// //FOR MY SENDING EMAIL
// // Generate a random string
// $token=openssl_random_pseudo_bytes(16);
// // convert the binary data into hexadecimal representation
// $token=bin2hex($token);
// // print it out for example purposes
// echo $token;

		$dbServername="localhost";
		$dbUsername="root";
		$dbPassword="";
		$dbName="cman";

// $dbServername="sql302.epizy.com";
// 		$dbUsername="epiz_25239751";
// 		$dbPassword="moni37230559";
// 		$dbName="epiz_25239751_cman";
		
$conn= mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$Gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$residence= $_POST['residence'];
$pob = $_POST['pob'];
$ministry = $_POST['ministry'];
$mobile= $_POST['mobile'];
$email= $_POST['email'];
//$password=$_POST['password'];

//===========for generating a stong password=============
// function generateRandomString($length = 8) {
//     return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
// }
// $password=generateRandomString();

$password= 'q6wrws52!';

// check if user already exist
$query ="select * from members where  mobile ='$mobile';";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);
// check if email already exist
$query2 ="select * from members where  email ='$email';";
$result2=mysqli_query($conn,$query2);
$count2=mysqli_num_rows($result2);
if ($count>0 || $count2>0)
	{
?>  
<script type="text/javascript">
		alert("User already Exist!! Either 'E-MAIL' or 'REG-NUMBER' already used. Try Again");
		window.location= "signup-page.php";
	</script>
	<?php
	}
  else{
    $sql= "insert into members
	(fname,sname,lname,Gender,Birthday,Residence,pob,ministry,mobile,email,password,date) 
     values('$fname','$sname','$lname','$Gender','$birthday','$residence','$pob','$ministry','$mobile','$email','$password','');";
     mysqli_query($conn, $sql);


     require_once 'vendor/autoload.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.mailtrap.io', 465 ,'TLS'))
  ->setUsername('6ae7034651f43d')
  ->setPassword('26b6b7403a63d7')
;
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// get html file content
$html_content = file_get_contents('sendmail.html');

// Create a message
$message = (new Swift_Message('WELCOME TO SEKUCU'))
  ->setFrom(['noreply@sekucu.org' => 'SEKU CU'])
  ->setTo(['davies.langatt@gmail.com', 'davies.langatt@gmail.com' => 'A name'])
  // ->setBody('')

 
   ->setBody($html_content) //add html content
  ->setContentType('text/html')
  ;

// Send the message
$result = $mailer->send($message);


?>
<script type="text/javascript">
		alert("Registration succesful.Check your Email For Password To Login");
		window.location= "login-page.php";
	</script>
	<?php
}

?>
