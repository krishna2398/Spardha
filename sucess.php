
<html>

<head>
  <title>textured_blue - contact us</title>
  <meta name='description' content='website description' />
  <meta name='keywords' content='website keywords, website keywords' />
  <meta http-equiv='content-type' content='text/html; charset=windows-1252' />
  <link rel='stylesheet' type='text/css' href='style/style.css' title='style' />
</head>

<body>
  <div id='main'>
    <?php include_once 'header.php'; ?>
    <div id='site_content'>
       
       <?php
        session_start();
         $otp= $_SESSION['OTP'];

         $conn = mysqli_connect('localhost','admin@localhost','admin@123','spardha');
         $query = "SELECT `name`, `phnum`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `id`, `valied`, `time`,`email` FROM `bookings` WHERE otp='$otp'";
         $result = mysqli_query($conn,$query);
         $row = mysqli_fetch_row($result);
         echo $row[7];
         if($row[7] == 1)
         {
             echo " <p><span>Thank you for booking the auto</span></p>";
             echo "<h2>Tables</h2>";
             echo "<p>Tables should be used to display data and not used for laying out your website:</p>";
             echo "<table width='70%'>";
             echo "<tr><td>Booking ID :</td><td>$row[6]</td></tr>";
             echo "<tr><td>Name :</td><td>$row[0]</td></tr>";
             echo "<tr><td>Ph.number :</td><td>$row[1]</td></tr>";
             echo "<tr><td>Emali :</td><td>$row[9]</td></tr>";
             echo "<tr><td>Pickup Address :</td><td>$row[2]</td></tr>";
             echo "<tr><td>Pickup Area :</td><td>$row[3]</td></tr>";
             echo "<tr><td>Drop Address :</td><td>$row[4]</td></tr>";
             echo "<tr><td>Drop Area :</td><td>$row[5]</td></tr>";
             echo "<tr><td>Date And Time of Booking :</td><td>$row[8]</td></tr>";
             
            echo "</table>";
         }
        else{
            echo "<h2>Your request has not been processed .</h2>";
            echo "<form action='register_auto.php' method='post'>";
            echo "<input class='submit'  type='submit' value='Click here to book an Auto again'>";
            echo "</form>";
        }
        $query1="UPDATE `bookings` SET `otp`=0 WHERE id='$row[6]'";
        mysqli_query($conn,$query);
        session_unset();    
        session_destroy();

       ?>
      </div>
      <div id='footer'>
          Copyright &copy; textured_blue | <a href='http://validator.w3.org/check?uri=referer'>HTML5</a> | <a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a> | <a href='http://www.html5webtemplates.co.uk'>Free CSS Templates</a>
        </div>
  </div>
</body>
</html>
