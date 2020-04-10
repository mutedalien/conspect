<?php
include_once '../config/db.php';


if (isset($_POST['changeStatus'])) {
    $connect = new DB();
    $connect->Update('basket', array('status_id'=>$_POST['changeStatus'], 'date_time'=>date("Y-m-d H:i:s")), 'order_id='.$_POST['order_id']);
    if ($_POST['changeStatus'] == 1) {
        $tek_status = 'Подтвержден';
        $next_status= 'Взять в работу';
    }
    if ($_POST['changeStatus'] == 2) {
        $tek_status = 'В работе';
        $next_status= 'Выполнить';
    }
    if ($_POST['changeStatus'] == 3) {
        $tek_status = 'Выполнен';
        $next_status= '';
    }

    echo json_encode(array('next_status'=>$next_status, 'tek_status'=>$tek_status));
}


?>