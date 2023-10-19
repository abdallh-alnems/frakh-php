<?php

include "../connect.php";


$stmt = $con->prepare("SELECT * FROM `types prices up`  
JOIN `types prices down` 
WHERE `types prices up`.`id_up` = `types prices down`.`id_down`
ORDER BY `types prices up`.`date_up` DESC
 ");

$stmt->execute(array());

$data = $stmt->fetchAll(PDO::FETCH_ASSOC);


$count = $stmt->rowCount();

if($count > 0 ){
    echo json_encode(array("status" => "success" , "data" => $data )) ;
}else{
    echo json_encode(array("status" => "fail" )) ;
}

?>
