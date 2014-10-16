<?php
  file_put_contents("udid-output.txt", "got to the udid.php");
  $data = file_get_contents('php://input');
  $output = rawurlencode($data);
?>
<html>
  <head>
    <title>iOS UDID</title>
  </head>
  <body>
    <h1>iOS UDID</h1>
    <p><?=$output?></p>
  </body>
</html>