<?php
use PHPUnit\Framework\TestCase;

final class M_CartTest extends TestCase {

	/**
	 *@dataProvider cartProvider
	 */
	public function testCreateCart($expected) {
		$Mcart = new M_Cart();
		$cart = $Mcart->createUserCart();
		$this->assertSame($expected, is_array($cart));
	}

	public function cartProvider() {
		return [
			[true],
		];
	}
}