<?php
$pick = array("SERVER_PROTOCOL", "REQUEST_URI", "SCRIPT_NAME", "HTTP_HOST");
foreach ($_SERVER as $key => $value) {
    if (in_array($key, $pick)) {
        echo $key.': '.$value.'<br>';
    }
}
?>
