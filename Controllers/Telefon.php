<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tel = $_POST['tel'];
    if (is_numeric($tel)) {
        echo var_export($tel, true) . " - tel ready", PHP_EOL;
    } else {
        echo var_export($tel, true) . " - error tel", PHP_EOL;
    }
    //echo ($tel);
}
?>