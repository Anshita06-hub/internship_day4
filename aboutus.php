<!DOCTYPE HTML>
<html>

<head>
  <title>CSS3_colour2</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
  
   <?php
include './themepart/logo.php';
include './themepart/menu.php';


?>
           
 
<div id="site_content">
              <?php
include './themepart/slider.php';
?>

      <div class="content">
        <h1>Welcome to my template integration </h1>
        <p>This is my about us page </p>
        
      </div>
    </div>
 <?php
include './themepart/footer.php';
 ?>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>



