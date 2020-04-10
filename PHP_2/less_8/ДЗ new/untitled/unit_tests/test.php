<?php
use PHPUnit\Framework\TestCase;

final class M_PageTest extends TestCase {
	public function testGaleryArr() {
		$galery = new M_Page();
		$expected = is_array([]);
		$this->assertSame($expected, is_array($galery->createImagesArr()));
	}
}