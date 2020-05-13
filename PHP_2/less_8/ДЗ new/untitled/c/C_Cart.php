<?php

class C_Cart extends C_Base {
	public function action_cart() {
		$this->title .= 'Корзина';

		$this->cart = M_Cart::createUserCart();

		$this->total = M_Cart::getCartTotal();

		$isClearCart = M_Cart::isClearCart();
		if ($isClearCart) {
			M_Cart::clearCart();
		}

		$isOrder = M_Cart::isOrder();
		if ($isOrder) {
			M_Cart::ordered();
		}

		$isDelete = M_Cart::isProductDelete();
		if ($isDelete) {
			M_Cart::deleteGood();
		}

		$this->content = $this->Template('v_cart.php', array('cart' => $this->cart, 'total' => $this->total));
	}

	public function action_ordered() {
		$this->title .= 'Корзина';

		$this->content = $this->Template('v_ordered.php');
	}
}