<?php
require_once '../config/db.php';

if ('addToBasket' == $_POST['task']) {
    $connect = new DB;
    $row = $connect->SelectWhere('goods', 'id='.$_POST['id'], false);
    $good = $row;
    $row = $connect->SelectWhere('basket', 'user_id='.$_POST['user_id'].' and order_id=0 and good_id='.$_POST['id'], false);
    $basket = $row;

    if ($basket) {
        $connect->Update('basket', array( 'sum'=>($basket['count']+1)*$good['price'], 'count'=>$basket['count']+1, 'date_time'=>date("Y-m-d H:i:s")),'id='.$basket['id']);
    } else {
        $connect->Insert('basket', array(
                'good_id'=>$good['id'],
                'user_id'=>$_POST['user_id'],
                'count'=>1,
                'sum'=>$good['price'],
                'date_time'=>date("Y-m-d H:i:s"),
                'status_id'=>0)
        );
    }
    echo json_encode(true);
}

if ('confirmOrder' == $_POST['task']) {
    $connect = new DB;
    $row = $connect->SelectWhere('basket', 'order_id!=0 order by order_id desc', false);
    $newOrderId = $row['order_id']+1;

    if( $connect->Update('basket', array(
        'order_id'=>$newOrderId,
        'date_time'=>date("Y-m-d H:i:s")),'id in ('.$_POST['ids'].')')) {
        $response = "Заказ отправлен на обработку.<br>
        Ваша корзина пуста!";
    } else {
        $response = 'Что-то пошло не так. Попробуйте еще раз или свяжитесь с нами';
    }

    echo json_encode($response);
}

if ('higerCount' == $_POST['task']) {
    $connect = new DB;
    $row = $connect->SelectWhere('basket', 'id='.$_POST['id'], false);
    $count = $row['count']+1;
    $price = $row['sum']/$row['count'];

    $connect->Update('basket', array(
        'count'=>$count,
        'sum'=>$price*$count,
        'date_time'=>date("Y-m-d H:i:s")),'id ='.$_POST['id']);
    $sum = (int)str_replace('$','', $_POST['sum']);

    $sum = $sum - $row['sum'] + $price*$count;

    echo json_encode(array($count, $price*$count, $sum));
//    echo json_encode($_SESSION);
}

if ('lowerCount' == $_POST['task']) {
    $connect = new DB;
    $row = $connect->SelectWhere('basket', 'id='.$_POST['id'], false);
    $count = $row['count']-1;
    $price = $row['sum']/$row['count'];

    $sum = (int)str_replace('$','', $_POST['sum']);
    $sum = $sum - $row['sum'] + $price*$count;

    $result = array (1, $row['sum'],$sum);
    if ($row['count']!=1) {
        $connect->Update('basket', array(
            'count'=>$count,
            'sum'=>$price*$count,
            'date_time'=>date("Y-m-d H:i:s")),'id ='.$_POST['id']);


        $result = array($count, $price*$count, $sum);
    }
    echo json_encode($result);
}

if ('deleteFromBasket' == $_POST['task']) {
    $connect = new DB;
    $row = $connect->SelectWhere('basket', 'id='.$_POST['id'], false);
    $connect->Delete('basket', 'id='.$_POST['id']);

    $arr = $connect->innerJoin('basket b', 'goods g', 'b.id, b.good_id, g.title, b.sum, b.count', 'g.id', 'b.good_id', 'where b.user_id=' . $row['user_id'] . ' and b.order_id=0 order by b.id desc', true);
    if ($arr) {
        $n = 1;
        $sum = 0;
        foreach ($arr as $good)  {
            $id[] = $good['id'];
            $sum +=$good['sum'];
          $html[] = "   <tr>
                <td>".$n++."</td>
                <td>".$good['good_id']."</td>
                <td>".$good['title']."</td>
                <td>".$good['sum']/$good['count']."</td>
                <td>
                    <a class='changeCount' onclick='lowerCount(".$good['id'].")'>-</a>
                    <span id='count_".$good['id']."'>".$good['count']."</span>
                    <a class='changeCount' onclick='higerCount(".$good['id'].")'>+</a>
                </td>
                <td id='sum_".$good['id']."'>".$good['sum']."</td>
                <td><a class='deleteBsk' onclick='deleteFromBasket(".$good['id'].")'>X</a></td>
            </tr>";

        }
        echo json_encode(array($html, $sum));
    } else {
        echo json_encode(0);
    }


}

?>