
<html>

<head>
  <title>textured_blue - contact us</title>
  <meta name='description' content='website description' />
  <meta name='keywords' content='website keywords, website keywords' />
  <meta http-equiv='content-type' content='text/html; charset=windows-1252' />
  <link rel='stylesheet' type='text/css' href='style/style.css' title='style' />
</head>

<body>
 <?php
  session_start(); 
  include_once 'header.php';
  if(!(isset($_SESSION['start'])))
      {
          header ('Location: http://localhost/spardha/index.php');
      }
 ?>


    <div id='site_content'>
      <form method='post' action = 'process.php'>
       <div style='align: center;'>
         <table>
           <tr>
             <td>
               <p><span>OTP :</span><input type='text' name='otp_entered'/></p>
               
              <input class='submit' type='submit' />
              <?php
                if(isset($_GET['err']))
                {
                     echo "<h5 style='color: rgb(196, 46, 46);'>invalied OTP</h5>";
                }
                else if(isset($_POST['phnum'])){}
              ?>
             </td>
           </tr>
           
         </table>
           <p style='padding-top: 15px'>
           
           </p>
          </div>
        </form>
    </div>
      <div id='footer'>
          Copyright &copy; textured_blue | <a href='http://validator.w3.org/check?uri=referer'>HTML5</a> | <a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a> | <a href='http://www.html5webtemplates.co.uk'>Free CSS Templates</a>
        </div>
  </div>
</body>
</html>
