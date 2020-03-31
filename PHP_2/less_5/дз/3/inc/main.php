<?

class Database {
	private $status;
	const INC_PATH = "inc/";
	const DB_NAME = "progernote_atdb";
	
	public function dbConnect($local) {
		if($local == true) 
		{
			$this->status = new mysqli('localhost', 'root', '', self::DB_NAME);
		}
		mysqli_set_charset($this->status, 'utf8');
	}
	public function tablePrint($table,$id) {
		//$max = $id+25;
		if($this->status) {
			$query = mysqli_query($this->status, "SELECT * FROM {$table} where id>$id limit 25");
			$arResult = [];
			while( $row = mysqli_fetch_assoc($query) ){
				$arResult[] = $row;
		    }
			return $arResult;
		}
	}
	
	public function incFile($dir) {
		$srcFile = self::INC_PATH.$dir;
		if(file_exists($srcFile)) 
		{
			require($srcFile);
		} 
		else 
		{
			die();
		}
	}
	
}

$database = new Database();
$database->dbConnect(true);
//$database->addItems();?>