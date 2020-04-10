<?php

class M_Base {
	public function safe($data) {
		return htmlspecialchars(trim(strip_tags($data)));
	}
}