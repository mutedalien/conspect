<?php
 $good = $item;
 $user_id = $_SESSION['user_id'];
?>
<div class='goodsWrapItem'>

    <div class="wrapGoodImgItem">
        <a><img class='goodImgItem'src="../v/<?= $good['photo'] ?>"></a>
    </div>
    <div class="wrapGoodInfo">
        <div class='goodsNameFull'><?= $good['title']; ?></div>
        <div class='goodsPriceItem'><b>$</b><?= $good['price'] ?></div>
        <div class='goodsParamItem'><?= $good['param'] ?></div>
<?php if ($good['discount']>0) {
    echo('<div class="stickerItem"><img class="stickerImgItem" src="../v/img/star.png"><span class="stickerTextItem">'.$good['discount'].'%</span><div class="explain">    товар со скидкой дня '.$good['discount'].'%</div></div>');
};
if ($good['hit']==1) {
    echo('<div class="stickerItem"><img class="stickerImgItem" src="../v/img/star.png"><span class="stickerTextItem">Hit!</span><div class="explain">    популярный товар</div></div>');
};?>
</div>
<div class="btnWrapItem">
    <input type='button' class='addToBasket btn' value='Дoбавить в корзину' onclick="addToBasket(<?= $good['id'] ?>,<?=$user_id?>)" data-id='<?= $good['id'] ?>'>
    <input type='button' class='deleteToBasket btn' value='Удалить из корзины' onclick="deleteToBasket(<?= $good['id'] ?>)" data-id='<?= $good['id'] ?>'>
</div>
</div>