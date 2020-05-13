<?require_once($_SERVER['DOCUMENT_ROOT'].'/inc/main.php');
$database->incFile('header.php');?>

<div class="catalog-list row">
	<?$i = $_GET['goods']? $_GET['goods']: 0;
	//$max = $i + 24;
	$arCatalog = $database->tablePrint('catalog',$i);
	foreach($arCatalog as $ac){
	//for($i; $i <= $max; $i++) {
		$htmlStr .= "<div class='catalog-item col-2' data-id=";
		$htmlStr .=$ac['id']."><h4 class='item-title'>";
		$htmlStr .= $ac['title']."</h4><img src=";
		$htmlStr .= $ac['image']." class='item-image'><div class='item-description'><p>";
		$htmlStr .= $ac['description']."</p></div><div class='item-price'><span class='price'>";
		$htmlStr .= $ac['price']."&nbsp;руб.</span><a href='#' class='buy-btn'>Купить</a></div></div>";
	}
	echo $htmlStr; ?>
	<script>
		$(function(){
			$('#jsShowMore').click(function(e){
				e.preventDefault();
				let goods = $('.catalog-list .catalog-item').last().attr('data-id');
				console.log(goods);
				$.ajax({
					type: 'POST',
					url: 'catalog.ajax.php',
					data: {GOODS: goods},
					success: function(data){
						let result = JSON.parse(data);
						$('.catalog-list').append(result.html);
					}
				});
			});
		});
	</script>
</div>
<a id="jsShowMore" href="" data-goods=25>Показать еще</a>

<?$database->incFile('footer.php');?>