<?php

class C_Page extends C_Base {
	public function action_index() {
		$this->title .= 'Галерея Продукции';
		$images = M_Page::createImagesArr();

		$this->content = $this->Template('v_index.php', array('imagesArr' => $images));
	}

	public function action_product() {
		$this->title .= 'Станция зарядки';
		$this->product = M_Page::productGet();

		$this->content = $this->Template('v_product.php', array('product' => $this->product));
	}
}