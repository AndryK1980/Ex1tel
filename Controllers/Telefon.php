<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tel = $_POST['tel'];
        if (!empty($tel)) {
            if (is_numeric($tel)&&strlen($tel) >= 10&&strlen($tel) <= 11) {
                $mydata=checFormat($tel);
               echo json_encode($mydata);
                
            } else {
                $mydata= array("err" => "Error tel");
                echo json_encode($mydata);
            }
        } else {
            $mydata= array("err" => "Enter tel");
            echo json_encode($mydata);
        }
        
        
    } 


function checFormat($tel){
    if (strlen($tel) == 10) {
        $telVar1='+7 ('.substr($tel, 0, 3).') '.substr($tel, 3, 3).' '.substr($tel, 6, 2).'-'.substr($tel, 8, 2);
        $telVar2='8-'.substr($tel, 0, 3).'-'.substr($tel, 3, 3).'-'.substr($tel, 6, 4);
        $telVar3=$tel;
    }
    elseif (strlen($tel) == 11) {
        $telVar1='+7 ('.substr($tel, 1, 3).') '.substr($tel, 4, 3).' '.substr($tel, 7, 2).'-'.substr($tel, 9, 2);
        $telVar2='8-'.substr($tel, 1, 3).'-'.substr($tel, 4, 3).'-'.substr($tel, 7, 4);;
        $telVar3=substr($tel, 1, 10);
    }
    
    $arrayTel = array(
        "var1" => $telVar1,
        "var2" => $telVar2,
        "var3" => $telVar3,
        "err"  => ""
    );
  return $arrayTel;

}
?>