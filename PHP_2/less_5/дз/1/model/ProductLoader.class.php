<?

try {
  $bdname = 'mysql:dbname=php_shop;host=localhost';
  $bduser = 'root';
  $bdpass = '';
  $dbh = new PDO($bdname, $bduser, $bdpass);
} catch (PDOException $e) {
  echo "Error: Could not connect. " . $e->getMessage();
}

// установка error режима
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
