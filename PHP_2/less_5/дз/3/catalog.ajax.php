<?require_once($_SERVER['DOCUMENT_ROOT'].'/inc/main.php');
if($_POST) {
	$i = $_POST['GOODS'];
	
	$htmlStr = '';
	$arCatalog = $database->tablePrint('catalog',$i);
	$result = [];
	foreach($arCatalog as $ac){
	//for($i; $i <= $max; $i++) {
		$htmlStr .= "<div class='catalog-item col-2' data-id=";
		$htmlStr .=$ac['id']."><h4 class='item-title'>";
		$htmlStr .= $ac['title']."</h4><img src=";
		$htmlStr .= $ac['image']." class='item-image'><div class='item-description'><p>";
		$htmlStr .= $ac['description']."</p></div><div class='item-price'><span class='price'>";
		$htmlStr .= $ac['price']."&nbsp;руб.</span><a href='#' class='buy-btn'>Купить</a></div></div>";
	}
	$result['html'] = $htmlStr;
	echo json_encode($result);
}
?>