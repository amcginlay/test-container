<?php $pick = array("SERVER_PROTOCOL", "REQUEST_URI", "SCRIPT_NAME", "HTTP_HOST"); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Test Container</title>
  </head>
  <body>
    <?php foreach ($_SERVER as $key => $value) { if (in_array($key, $pick)) { ?>
    <div><p><?php echo $key.': '.$value; ?></p></div>
    <?php } } ?>
  </body>
</html>
