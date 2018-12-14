    <?php
	
      session_start();
      $_SESSION['start']=1;
      
      if(isset($_POST['name']) && isset($_POST['phnum']) && isset($_POST['pick_address']) && isset($_POST['pick_area']) && isset($_POST['drop_address']) && isset($_POST['drop_area']))
      {
            $name = $_POST['name'];
            $phnum = $_POST['phnum'];
        	$pick_address = $_POST['pick_address'];
	        $pick_area = $_POST['pick_area'];
	        $drop_address = $_POST['drop_address'];
            $drop_area = $_POST['drop_area'];
            $email = $_POST['email'];
	        $otp = rand(1001,9999);
	        $valied = 0;
            $_SESSION['OTP']= $otp;
            $msg="Dear $name,\nThank%20you%20for%20using%20AutoOla\nyour%20OTP:$otp";
            $msg1="Dear $name,\nThank you for using AutoOla\nyour OTP:$otp";
            $con = mysqli_connect('localhost', 'admin@localhost', 'admin@123', 'spardha');
        	$query = "INSERT INTO `bookings`(`name`, `phnum`, `email`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `otp`, `valied`, `time`) VALUES ('$name','$phnum','$email','$pick_address','$pick_area','$drop_address','$drop_area','$otp','0',CURRENT_TIMESTAMP)";
            mysqli_query($con,$query);
            //file_get_contents("http://bulksms.mysmsmantra.com:8080/WebSMS/SMSAPI.jsp?username=Tchunt&password=589004351&sendername=Tchunt&mobileno=".$phnum."&message=".$msg);
            include_once 'send_email.php';
            
          header ('Location: http://localhost/spardha/OTP.php');
      }    

      
    ?>