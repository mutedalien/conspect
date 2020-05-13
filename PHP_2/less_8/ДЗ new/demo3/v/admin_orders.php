<?php
$n=1;

?>
     <table>
         <thead>
         <tr>
             <td>№</td>
             <td>ИД заказа</td>
             <td>Дата заказа</td>
             <td>Заказчик</td>
             <td>Цена</td>
             <td>Статус</td>
             <td>Сменить статус</td>
         </tr>
         </thead>
         <tboby>
            <?php foreach ($items as $order)  {
                ?>
                <tr>
                    <td><?=$n++?></td>
                    <td><?=$order['order_id']?></td>
                    <td><?=$order['date_time']?></td>
                    <td><?=$order['username']?></td>
                    <td><?=$order['sum']?></td>
                    <td id="tek_st_<?=$order['order_id']?>"><?php
                        if ($order['status']==0) { echo 'Новый';}
                        if ($order['status']==1) { echo 'Подтвержден';}
                        if ($order['status']==2) { echo 'В работе';}
                        if ($order['status']==3) { echo 'Выполнен';}
                        $status = $order['status']+1;
                        ?></td>
                    <td><a id='sled_st_<?=$order['order_id']?>' onclick="changeStatus(<?=$status ?>,<?=$order['order_id']?>)" style="cursor: pointer;color:blue"><?php if ($order['status']==0) { echo 'Подтвердить';}
                        if ($order['status']==1) { echo 'Взять в работу';}
                        if ($order['status']==2) { echo 'Выполнить';}
                            ?></a></td>
                </tr>
            <?php
            }

?>
         </tboby>

     </table>