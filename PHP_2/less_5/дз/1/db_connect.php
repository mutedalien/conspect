<?
class Connection 
{
  private $dbHost = 'localhost';
  private $dbName = 'php_shop';
  private $dbUser = 'root';
  private $dbPass = '';
  private $dbh;
  private $limit = 0; 

  public function __construct(){
    if(!isset($this->dbh)){
      // Connect to the database
      try{
        $conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUser, $this->dbPass);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->dbh = $conn;
      }catch(PDOException $e){
        die("Failed to connect with MySQL: " . $e->getMessage());
      }
    }
  }

  public function getRows25(){   
    static $limit; 
    if (isset($_GET['page'])) {
      $limit = 25 * $_GET['page']; 
    }
    else {
      $limit += 25;
    }
    
    $sql = "SELECT brand.name as brand, product.name, product.price FROM product LEFT JOIN brand USING (brand_id) LIMIT $limit";   
    
    $query = $this->dbh->query($sql);
    $query->execute();

    while ($row = $query->fetch()) {
      $data[] = $row;
    }
    
    return !empty($data)?$data:false;
  }
}
