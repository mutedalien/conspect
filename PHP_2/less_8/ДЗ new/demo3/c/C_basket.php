<?php

class C_basket extends C_base {

    public function action_view() {
        $goods_arr = self::getBasket();
        $this->title .= '::Корзина';
        $this->content = $this->Template('v/basket_view.php', array('items'=>$goods_arr));
    }

    public function getbasket() {
            $connect = new DB;
            return $connect->innerJoin('basket b', 'goods g', 'b.id, b.good_id, g.title, b.sum, b.count', 'g.id', 'b.good_id', 'where b.user_id=' . $_SESSION['user_id'] . ' and b.order_id=0 order by b.id desc', true);
    }
}

//


//class Basket
//{
//
//}

?>
