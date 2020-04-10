<?php
use PHPUnit\Framework\TestCase;

final class M_DBTest extends TestCase {

	/**
	 *@dataProvider userIDProvider
	 */
	public function testGetUser($userLogin, $expected) {
		$db = new M_DB();
		$user = $db->getUser($userLogin);
		$this->assertSame($expected, is_array($user));
	}

	public function userIDProvider() {
		return [
			[MmM, true],
			[admin, true],
			[thief, false],
		];
	}
}