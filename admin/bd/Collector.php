<?php
include_once('dataBase.php');

// Define configuration
/*define("DB_HOST", "ec2-54-225-88-199.compute-1.amazonaws.com");
define("DB_USER", "uzxaqhjmjxncxa");
define("DB_PASS", "d0747a93621a7131e779199b9ab67e5457476bf8a081eb9b897d473d5b950e74");
define("DB_NAME", "d6pba8juduci4s");*/

define("DB_HOST", "ec2-50-17-203-84.compute-1.amazonaws.com");
define("DB_USER", "bgrhelnxypqrcj");
define("DB_PASS", "0f9c9c7495961bb49623c3a59a7c93d68cc406513e4c46a50e21af76f8f3ed59");
define("DB_NAME", "d1f5a0t0p8ie1i");


class Collector extends dataBase
{
  public static $db;
  private $host      = DB_HOST;
  private $username  = DB_USER;
  private $password  = DB_PASS;
  private $dbname    = DB_NAME;
    
  public function __construct()
  {
    self::$db = new dataBase($this->username, $this->password, $this->host, $this->dbname);
  }

}

?>
