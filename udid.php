<?php
  file_put_contents("udid-output.txt", "got to UDID/udid.php");
  $data = file_get_contents('php://input');
  $output = rawurlencode($data);
  file_put_contents("udid-output-data.txt", $output);
  header("Location: http://people.cs.vt.edu/tgm/old/UDID/result?params={$output}", true, 301);
?>
