
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
    <div id='header'>
      <div id='logo'>
        <div id='logo_text'>
          <!-- class='logo_colour', allows you to change the colour of the text -->
          <h1><a href='index.php'>textured<span class='logo_colour'>blue</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id='menubar'>
        <ul id='menu'>
          <!-- put class='selected' in the li tag for the selected page - to highlight which page you're on -->
          <li><a href='index.php'>Home</a></li>
          <li><a href='examples.html'>Examples</a></li>
          <li class='selected'><a href='register_auto.php'>Book Auto</a></li>
          <li><a href='register_cab.php'>Another Page</a></li>
          <li><a href='contact.html'>Contact Us</a></li>
        </ul>
      </div>
    </div>


    <div id='site_content'>
     
                <?php
                    if(isset($_POST['id']))
                   {

                        $id=$_POST['id'];
                        $con = mysqli_connect('localhost', 'admin@localhost', 'admin@123', 'spardha');
                        $query="SELECT `name`, `phnum`, `pick_address`, `pick_area`, `drop_address`, `drop_area`, `id`, `valied`, `time` FROM `bookings` WHERE id='$id'";
                        $result = mysqli_query($con, $query); 
                        $row = mysqli_fetch_row($result);

                    }
                
                        echo "<form method='post' action=".$_SERVER['PHP_SELF']." id='search_form'>";
                        echo "<p>";
                        echo "<input class='search' type='text' name='id' placeholder='Enter your Booking ID' />";
                        echo "<input name='search' type='submit' value='search' />";
                        echo "</p>";
                        echo "</form>";
                        if(isset($_POST["id"]))
                         {
                            if($row[7] == 1)
                            {
                            echo " <p><span>Thank you for booking the auto</span></p>";
                            echo "<h2>Tables</h2>";
                            echo "<p>Tables should be used to display data and not used for laying out your website:</p>";
                            echo "<table width='70%'>";
                            echo "<tr><td>Booking ID :</td><td>$row[6]</td></tr>";
                            echo "<tr><td>Name :</td><td>$row[0]</td></tr>";
                            echo "<tr><td>Ph.number :</td><td>$row[1]</td></tr>";
                            echo "<tr><td>Pickup Address :</td><td>$row[2]</td></tr>";
                            echo "<tr><td>Pickup Area :</td><td>$row[3]</td></tr>";
                            echo "<tr><td>Drop Address :</td><td>$row[4]</td></tr>";
                            echo "<tr><td>Drop Area :</td><td>$row[5]</td></tr>";
                            echo "<tr><td>Date And Time of Booking :</td><td>$row[8]</td></tr>"; 
                            echo "</table>";
                            }
                            else{
                            echo "<h5 style='color: rgb(196, 46, 46);'>ID dosen't exist Enter valid Booking ID</h5>";
                            }
                    }
                ?>
      <div id='footer'>
          Copyright &copy; textured_blue | <a href='http://validator.w3.org/check?uri=referer'>HTML5</a> | <a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a> | <a href='http://www.html5webtemplates.co.uk'>Free CSS Templates</a>
        </div>
  </div>
</body>
</html>
