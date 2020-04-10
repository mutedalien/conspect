<?php

class C_admin extends C_base {

    public function getOrders () {
        $connect = new DB();
        $q = $connect->SelectWhatWhere('basket', 'sum(sum) as sum, max(order_id) as order_id ,max(user_id) as user_id, max(date_time) as date_time, max(status_id) as status', 'order_id!=0 group by order_id order by order_id desc', true);
        return $q;
    }
    public function getUserName ($id) {
        $connect = new DB();
        $q = $connect->Select('users', 'id', $id, false);
        return $q['name'];
    }

    public function action_orders() {
        $orders = new C_Admin();
        $order = $orders->getOrders();
        $result = array();
        foreach ($order as $item) {
            $item['username']=$orders->getUserName($item['user_id']);
            $result[] =$item;
        }
        $this->title .= '::Корзина';
        $this->content = $this->Template('v/admin_orders.php', array('items'=>$result));
    }
}

?>