<?php
require_once '..\autoload.php';

if ($_POST['start']) {
	$startValue = $_POST['start'];
	$currentLimit = $_POST['end'];
	$newImages = M_DB::getAssocResult("SELECT
    img_id,
    `name`,
    concat(img_link.folder, img_link.path) AS full_path,
    concat(compr_img_link.folder, compr_img_link.path) AS compr_full_path,
    width,
    height,
    view_count,
    price,
    good_name,
    value AS discount,
    round(price * (100 - value)/100) AS discounted_price
    FROM images
    INNER JOIN img_link ON images.link_id = img_link.link_id
    INNER JOIN compr_img_link ON images.compr_link_id = compr_img_link.link_id
    INNER JOIN discount ON images.discount_id = discount.id
    WHERE img_id BETWEEN :start AND :limit;",
		$startValue,
		$currentLimit
	);
	$result = [];
	$htmlStr = '';
	foreach ($newImages as $image) {
		$htmlStr .= '<li>';
		$htmlStr .= '<a class="link" href="index.php?page=product' . $image['img_id'] . '">';
		$htmlStr .= '<span class="img_views">просмотров: ' . $image['view_count'] . '</span>';
		$htmlStr .= '<img class="product_img"
		id=' . $image['img_id'] . '
		src=' . $image['compr_full_path'] . '
		width=' . $image['width'] . '
		height=' . $image['height'] . '
		alt=' . $image['name'] . '>';
		$htmlStr .= '<span class="good_name">' . $image['good_name'] . '</span>';
		$htmlStr .= '<span class="img_price">Цена: ' . $image['price'] . ' USD</span>';
		$htmlStr .= '<form class="buy-btn-form" method="post">';
		$htmlStr .= '<button type="submit" name="buy" class="btn btn-success buy-btn"
		value="' . $image['img_id'] . '">В коризну</button>';
		$htmlStr .= '</form></a></li>';
	}
	$result['html'] = $htmlStr;
	echo json_encode($result);
}