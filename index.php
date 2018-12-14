<!DOCTYPE HTML>
<html>

<head>
  <title>AutoWala</title>
  <meta name='description' content='website description' />
  <meta name='keywords' content='website keywords, website keywords' />
  <meta http-equiv='content-type' content='text/html; charset=windows-1252' />
  <link rel='stylesheet' type='text/css' href='style/style.css' title='style' />
</head>

<body>
  <div id='main'>
    <?PHP
   include_once 'header.php';
    ?>
    <div id='site_content'>
      <div class='sidebar'>
        <!-- insert your sidebar items here -->
        <h3>Search</h3>
        <form method='post' action='search_user.php' id='search_form'>
          <p>
            <input class='search' type='text' name='id' placeholder='Enter Booking ID' />
            <input type='submit' value='search'>
          </p>
        </form>
      </div>
      <div id='content'>
        <!-- insert the page content here -->
        <h1>Welcome to AutoWala</h1>
        <p>AutoWala is a place where you can find the autos and cars coming to your door steps  <a href='http://creativecommons.org/licenses/by/3.0'>Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
        <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
        <p>You can view more free HTML5 web templates <a href='http://www.html5webtemplates.co.uk'>here</a>.</p>
        <p>This template is a fully functional 5 page website, with an <a href='examples.html'>examples</a> page that gives examples of all the styles available with this design.</p>
        
      </div>
    </div>
    <div id='footer'>
      Copyright &copy; textured_blue | <a href='http://validator.w3.org/check?uri=referer'>HTML5</a> | <a href='http://jigsaw.w3.org/css-validator/check/referer'>CSS</a> | <a href='http://www.html5webtemplates.co.uk'>Free CSS Templates</a>
    </div>
  </div>
</body>
</html>
