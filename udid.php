<?php
  $data = file_get_contents('php://input');
  $output = rawurlencode($data);
  header("Location: http://people.cs.vt.edu/tgm/old/UDID/result?params={$output}", true, 301);
?>
