<?
class Model extends Connection {

	protected $limit = 0; 

  public function getNext25() {

    $sql = "SELECT brand.name as brand, product.name, product.price FROM product LEFT JOIN brand USING (brand_id) LIMIT $limit";
    $limit += 25; 
    
    $sth = $this->dbh->query($sql);
    echo "<pre>";
    print_r($sth);
    echo "</pre>";
		/*while ($row = $sth->fetchObject()) {
    	$data[] = $row;
  	}*/
  }
}