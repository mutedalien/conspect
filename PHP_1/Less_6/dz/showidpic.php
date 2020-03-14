<?php>
//скрипт, получающий с основной страницы номер id, выбирающий для данного
//id путь к картинке и имя файла и отображающий ее используя html шаблон с
//заменой переменных. Также увеличивает значение счетчика открытий в базе.

include 'sqlconnect.php';
    
$tpl = file_get_contents('showidpic.tpl');
$id = $_GET['id'];
$db = $_GET['db'];
$sql = "SELECT filename, path, opened FROM $db WHERE id='$id'";
$result = mysqli_query($connection, $sql);
$sqlnewopened = "UPDATE $db SET opened=opened+1 WHERE id=";

if (mysqli_num_rows($result) > 0) {
    $sqlresult = mysqli_query($connection, $sqlnewopened.$id);
    $row = mysqli_fetch_assoc($result);
    $fullimage = $row["path"].'images\\\\'.$row["filename"];
    $content = '<img src="'.$fullimage.'" alt="pic" style="width: 100%;">';
    $content .= "<br>Просмотров фото: ".($row["opened"]+1);
    $title = 'picture id='.$id;
} else {
    echo "<h3>В базе $db нет изображения с id=".$id."!</h3>";
    echo '<br><a href="/">Вернуться на главную страницу</a>';
}

mysqli_close($connection);

$patterns = array( '/{title}/', '/{content}/' );
$replace = array( $title, $content );
echo preg_replace( $patterns, $replace, $tpl );
?>
    