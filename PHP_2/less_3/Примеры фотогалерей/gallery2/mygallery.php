<?php
  /*function excess($files) {
    $result = array();
	  for ($i = 0; $i < count($files); $i++) {
	      if ($files[$i] != "." && $files[$i] != "..") 
          $result[] = $files[$i];
	  }
    return $result;
  }*/

  $dir1 = "gallery_img/small"; 
  $dir2 = "gallery_img/big";// Путь к директории, в которой лежат изображения
  
  /*$files1 = scandir($dir1);
  $files2 = scandir($dir2);  // Получаем список файлов из этой директории
  /*$files1 = excess($files1);
  $files2 = excess($files2); // Удаляем лишние файлы
  */
  $files1 = array_slice(scandir($dir1), 2);
  $files2 = array_slice(scandir($dir2), 2);
?> 


<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
     <script type="text/javascript" src="scripts/jquery.js"></script> 
     <script type="text/javascript" src="scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script> 
     <script type="text/javascript" src="scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script> 
 <link rel="stylesheet" type="text/css" href="scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" /> 
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500			
		});
 	});
</script> 

</head>

<body>
<div id="main">
	<div class="post_title"><h2>Моя галерея / ДЗ УРОК-4</h2></div>
	<div class="gallery">

<?php 
for ($i = 0; $i < count($files1); $i++) { ?>
  <a rel="gallery" class="photo" href="<?=$dir2."/".$files2[$i]?>" target="_blank"><img src="<?=$dir1."/".$files1[$i]?>" alt="" /></a>
<?php } ?>	
	</div>
</div>

</body>
</html>