<?php
use PHPUnit\Framework\TestCase;

final class M_BaseTest extends TestCase {

	/**
	 *@dataProvider stringProvider
	 */
	public function testSafeString($data, $expected) {
		$M_Base = new M_Base();
		$res = $M_Base->safe($data);
		$this->assertSame($expected, $res);
	}

	public function stringProvider() {
		return [
			[123, '123'],
			['admin', 'admin'],
			['<br></br>', ''],
		];
	}
}