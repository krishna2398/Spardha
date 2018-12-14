<?php

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>AutoWala - Book Auto</title>
  <meta name='description' content='website description' />
  <meta name='keywords' content='website keywords, website keywords' />
  <meta http-equiv='content-type' content='text/html; charset=windows-1252' />
  <link rel='stylesheet' type='text/css' href='style/style.css' title='style' />
</head>

<body>
  <div id='main'>
    <?php
      include_once 'header.php';
    ?>
    <div id='site_content'>
      
      <div id='content'>
        <h1>Book Auto</h1>
        <p>Get your Auto at your Door Steps</p>
        <form action='session.php' method='post'>
          <div class='form_settings'>
            <p><span>Name</span><input class='contact' type='text' name='name' value='' id='name' /></p>
            <p><span>Mobile</span><input class='contact' type='text' name='phnum' value='' id='phnum'/></p>
            <p><span>Email</span><input class='contact' type='text' name='email' value='' id='email'/></p>
            <p><span>Pickup Address</span><input class='contact' type='text' name='pick_address' value='' id='name' /></p>
            <p><span>Area of Pickup</span>
              <select name='pick_area' id='pick_area'>
                <option value='>I Town'>I Town</option>
                <option value='II Town'>II Town</option>
                <option value='Chinnamiram'>Chinnamiram</option>
                <option value='Peddamiram'>Peddamiram</option>
                <option value='Rayalm'>Rayalm</option>
                <option value='JP Road'>JP Road</option>
              </select></p>
            <p><span>Droping Address</span><input class='contact' type='text' name='drop_address' value='' id='name' /></p>
            <p><span>Area of Drop</span>
              <select name='drop_area' id='drop_area'>
                <option value='I Town'>I Town</option>
                <option value='II Town'>II Town</option>
                <option value='Chinnamiram'>Chinnamiram</option>
                <option value='Peddamiram'>Peddamiram</option>
                <option value='Rayalm'>Rayalm</option>
                <option value='JP Road'>JP Road</option>
              </select></p>
            <p style='padding-top: 15px'><span>&nbsp;</span><input class='submit' type='submit'  /></p>
            
          </div>
        </form>
        
        <!-- insert the page content here -->
        <p><br /><br />NOTE: Auto should be booked atleast 30 min before the journey.</p>
      </div>
    </div>
    <div id='footer'>
      Copyright &copy; textured_blue | <a href='http://validator.w3.org/check?uri=referer'>HTML5</a> | <a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a> | <a href='http://www.html5webtemplates.co.uk'>Free CSS Templates</a>
    </div>
  </div>
</body>
</html>

