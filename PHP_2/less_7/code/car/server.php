<?
include "config.php";
$id = (int)$_POST['id'];

$res = mysqli_query($connect,"select * from models where id_mark=".$id);


while($data = mysqli_fetch_assoc($res)){
	echo "<option>".$data['name_model']."</option>";
	//$models[] = $data['name_model'];
}

//echo json_encode($models);