<?php
$n = 1;
$sum= 0;
if ($items) {
?>

     <table>
         <thead>
         <tr>
             <th>№</th>
             <th>Артикул</th>
             <th>Название</th>
             <th>Цена</th>
             <th>Количество</th>
             <th>Сумма</th>
             <th></th>
         </tr>
         </thead>
         <tboby>
            <?php foreach ($items as $good)  {
                $id[] = $good['id'];
                $sum +=$good['sum'];
                ?>
                <tr>
                    <td><?=$n++?></td>
                    <td><?=$good['good_id']?></td>
                    <td><?=$good['title']?></td>
                    <td><?=$good['sum']/$good['count']?></td>
                    <td>
                        <a class='changeCount' onclick="lowerCount(<?=$good['id']?>)">-</a>
                        <span id="count_<?=$good['id']?>"><?=$good['count']?></span>
                        <a class='changeCount' onclick="higerCount(<?=$good['id']?>)">+</a>
                    </td>
                    <td id="sum_<?=$good['id']?>"><?=$good['sum']?></td>
                    <td><a class="deleteBsk" onclick="deleteFromBasket(<?=$good['id']?>)">X</a></td>
                </tr>
            <?php
            }

   $ids = implode(',', $id);
?>
         </tboby>

     </table>
    <p  id="sumBasket"><span>Сумма заказа: </span><span id="sum">$<?= $sum?></span><button class="addToBasket" onclick="confirmOrder('<?=$ids?>')">Отправить заказ</button></p>

<?php
}

else {
echo 'Ваша корзина пуста';
}?>