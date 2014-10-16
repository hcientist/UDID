<?php 
  $udid = $_GET["params"];
  file_put_contents("udid-output.txt", $udid); 
?>

<html>
  <head>
    <title>iOS UDID</title>
  </head>
  <body>
    <h1>iOS UDID</h1>
    <div>
      <?=$udid?>
    </div>
    <p>With many thanks to <a href="http://www.joshwright.com/tips/getting-an-iphone-udid-from-mobile-safari">Josh Wright</a>, <a href="http://stackoverflow.com/a/9426573/1449799">Daniel Brajkovic</a>, and <a href="http://stackoverflow.com/a/6442198/1449799">Kev Swindells(?)</a>. </p>
    <?php echo $udid; ?>
  </body>
</html>