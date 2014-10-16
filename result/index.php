<?php 
  $udid = $_GET["params"];
  $decoded = rawurldecode($udid);
  $matches = array();
  preg_match('/>UDID<\/key>\s+<string>(.+)</', $decoded, $matches);
  $udid_val = $matches[1];
  file_put_contents("udid-output.txt", $udid); 
?>

<html>
  <head>
    <title>iOS UDID</title>
  </head>
  <body>
    <h1>iOS UDID</h1>
    <pre>
      <?php 
        echo $udid_val;
      ?>
    </pre>
    <p>With many thanks to <a href="http://www.joshwright.com/tips/getting-an-iphone-udid-from-mobile-safari">Josh Wright</a>, <a href="http://stackoverflow.com/a/9426573/1449799">Daniel Brajkovic</a>, and <a href="http://stackoverflow.com/a/6442198/1449799">Kev Swindells(?)</a>. </p>
  </body>
</html>