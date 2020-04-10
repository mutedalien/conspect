<?php

class M_Cart extends M_Base {
	public function getUserId() {
		//$current_user_id
		return $_SESSION['user_id'];
	}

	//формируем массив корзины конкретного пользователя
	//$cart
	public function createUserCart() {
		return M_DB::getCart("SELECT
	    img_id,
	    `name`,
	    good_name,
	    qty,
	    price,
	    concat(compr_img_link.folder, compr_img_link.path) AS compr_full_path,
	    price * qty AS sum
	    FROM cart
	    INNER JOIN images ON cart.product_id = images.img_id
	    INNER JOIN users ON cart.user_id = users.id
	    INNER JOIN compr_img_link ON images.compr_link_id = compr_img_link.link_id
	    WHERE user_id = :id
	    ORDER BY img_id;",
			$_SESSION['user_id']);
	}

	//вычисляем объем корзины
	//$cart_count
	public function getCartCount() {
		$cart = self::createUserCart();
		return count($cart);
	}

	//Вычисляем общую сумму корзины
	//$total
	public function getCartTotal() {
		$cart = self::createUserCart();
		$total = 0;
		foreach ($cart as $good) {
			$total += $good['sum'];
		}
		return $total;
	}

	public function isProductAdd() {
		return isset($_POST['buy']);
	}

	public function isProductDelete() {
		return isset($_POST['delete']);
	}

	public function isClearCart() {
		return isset($_POST['clear']);
	}

	public function isOrder() {
		return isset($_POST['order']);
	}

	//если была нажата кнопка "в корзину" - добавляем товар в корзину
	public function addProduct() {
		$images_full = M_Page::createImagesArr();
		$cart = self::createUserCart();
		$addProductID = trim(strip_tags($_POST['buy']));
		$product = [];
		$user_id = $_SESSION['user_id'];
		foreach ($images_full as $img) {
			if ($img['img_id'] == $addProductID) {
				$product = $img;
			}
		}
		//проверяем, не ли уже данного товара в корзине
		$isAlreadyInCart = false;
		foreach ($cart as $good) {
			if ($good['img_id'] == $addProductID) {
				$isAlreadyInCart = true;
				$product = $good;
			}
		}
		//если товар уже в корзине, увеличиваем кол-во на 1
		if ($isAlreadyInCart) {
			$newQty = $product['qty'] + 1;
			$user_id = $_SESSION['user_id'];
			$update_query = "UPDATE
	        `galery`.`cart`
	        SET `cart`.`qty` = :newQty
	        WHERE `cart`.`product_id` = :productID AND user_id = :id;";
			M_DB::addProductDB($update_query, $newQty, $addProductID, $user_id);
			unset($_POST['buy']);
			header('location: /index.php');
		}
		//если такого товара ещё нет в корзине, добавляем карточку товара
		else {
			$insert_query = sprintf("INSERT INTO `galery`.`cart` (`product_id`, `qty`, `user_id`) VALUES (\"%d\", \"%d\", \"%d\");", $addProductID, 1, $user_id);
			M_DB::executeQuery($insert_query);
			unset($_POST['buy']);
			header('location: /index.php');
		}

		$addProductID = null;
	}

	public function deleteGood() {
		$user_id = $_SESSION['user_id'];
		$good_id = $_POST['delete'];
		$delete_query = "DELETE FROM `galery`.`cart` WHERE `cart`.`user_id` = :user_id AND `cart`.`product_id` = :good_id;";
		M_DB::deleteGoodDB($delete_query, $user_id, $good_id);
		unset($_POST['delete']);
		header("Refresh: 0");
	}

	public function clearCart() {
		$user_id = $_SESSION['user_id'];
		$delete_query = "DELETE FROM `galery`.`cart` WHERE (`cart`.`user_id` = :id);";
		M_DB::getCart($delete_query, $user_id);
		unset($_POST['clear']);
		header("Refresh: 0");
	}

	public function ordered() {
		$cart = self::createUserCart();
		$user_id = $_SESSION['user_id'];
		foreach ($cart as $good) {
			$insert_query = sprintf("INSERT INTO `galery`.`orders` (`product_id`, `qty`, `user_id`) VALUES (\"%d\", \"%d\", \"%d\");", $good['img_id'], $good['qty'], $user_id);
			M_DB::executeQuery($insert_query);
		}
		unset($_POST['order']);
		self::clearCart();
		header('location: /index.php?c=cart&act=ordered');
	}
}
