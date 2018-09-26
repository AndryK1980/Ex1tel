<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tel = $_POST['tel'];
        if (is_numeric($tel)) {
            //echo var_export($tel, true) . " - tel ready", PHP_EOL;
            $mydata=checFormat($tel);
           echo json_encode($mydata);
            
        } else {
            echo var_export($tel, true) . " - error tel", PHP_EOL;
        }
    } 


function checFormat($tel){
  return $tel;
    switch ($tel) {
        case 0:
            echo "i равно 0";
            break;
        case 1:
            echo "i равно 1";
            break;
        case 2:
            echo "i равно 2";
            break;
}
}
?>