<?php

include "../connect.php";


$title =  filterRequset('date');
$content = filterRequset('as');
$userid = filterRequset('zxc');

    $stmt = $con->prepare("
INSERT INTO `qaz`( `date`, `as`, `zxc` ) 
VALUES ( ? , ? , ?  )");

$stmt->execute(array($title , $content , $userid ));


$count = $stmt->rowCount();

if($count > 0 ){
    echo json_encode(array("status" => "success" )) ;
}else{
    echo json_encode(array("status" => "fail" )) ;
}





?>
