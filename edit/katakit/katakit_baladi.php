<?php

include "../../connect.php";


$firstPriceUp    =  filterRequset('priceUp');
$firstPriceDown    =  filterRequset('priceDown');





$stmt = $con->prepare("UPDATE `types prices up`
SET `katakit_baladi_up` = ?
WHERE `id_up` = (SELECT MAX(`id_up`) FROM `types prices up`);

UPDATE `types prices down`
SET `katakit_baladi_down` = ?
WHERE `id_down` = (SELECT MAX(`id_down`) FROM `types prices down`);");

$stmt->execute(array($firstPriceUp ,  $firstPriceDown));


$count = $stmt->rowCount();

if($count > 0 ){
    echo json_encode(array("status" => "success" )) ;
}else{
    echo json_encode(array("status" => "fail" )) ;
}

?>
