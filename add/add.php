<?php

include "../connect.php";
include "type_names.php";





$stmt = $con->prepare("
    INSERT INTO `types prices up` (`date_up`, `frakh_abid_up`, `frakh_baladi_up` , `frakh_sasso_up` ,`frakh_amhit_abid_up`,`katakit_abid_up`,`katakit_sasso_up`,`katakit_baladi_up`,`byd_abid_up`,`byd_baladi_up`,`byd_aihmar_up`,`bat_firansawi_up`,`bat_maskufi_up`,`bat_molar_up`)
    VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? );
    
    INSERT INTO `types prices down` (`date_down`, `frakh_abid_down`, `frakh_baladi_down`,`frakh_sasso_down`,`frakh_amhit_abid_down`,`katakit_abid_down`,`katakit_sasso_down`,`katakit_baladi_down`,`byd_abid_down`,`byd_baladi_down`,`byd_aihmar_down`,`bat_firansawi_down`,`bat_maskufi_down`,`bat_molar_down`)
    VALUES ( ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? , ? );
");

$stmt->execute(array($date_up , $frakh_abid_up , $frakh_baladi_up , $frakh_sasso_up , $frakh_amhit_abid_up , $katakit_abid_up , $katakit_sasso_up , $katakit_baladi_up , $byd_abid_up , $byd_baladi_up , $byd_aihmar_up , $bat_firansawi_up , $bat_maskufi_up , $bat_molar_up , $date_down , $frakh_abid_down , $frakh_baladi_down , $frakh_sasso_down , $frakh_amhit_abid_down , $katakit_abid_down , $katakit_sasso_down , $katakit_baladi_down , $byd_abid_down , $byd_baladi_down , $byd_aihmar_down , $bat_firansawi_down , $bat_maskufi_down , $bat_molar_down ));


$count = $stmt->rowCount();

if($count > 0 ){
    echo json_encode(array("status" => "success" )) ;
}else{
    echo json_encode(array("status" => "fail" )) ;
}





?>