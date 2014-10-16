<?php 
  file_put_contents("udid-output.txt", "got to the result/index.php".$_GET["params"]); 
?>

<html>
  <head>
    <title>iOS UDID</title>
  </head>
  <body>
    <h1>iOS UDID</h1>
    <div>
      <?=$_GET["params"]?>
    </div>
    <p>With many thanks to <a href="http://www.joshwright.com/tips/getting-an-iphone-udid-from-mobile-safari">Josh Wright</a>, <a href="http://stackoverflow.com/a/9426573/1449799">Daniel Brajkovic</a>, and <a href="http://stackoverflow.com/a/6442198/1449799">Kev Swindells(?)</a>. </p>
  </body>
</html>