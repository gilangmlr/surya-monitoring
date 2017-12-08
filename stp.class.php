<?php
/**
* Inventory Class
* All inventory system needs
*
*/

require_once(__DIR__ . '/Db.class.php');

class STPClass
{
  /**
  * Construct
  * 
  */
  public function __construct() {
    $this->db       = new DB();
  }


  public function show_checklist()
  {
    $query = "SELECT * FROM stp WHERE true";
    $result = $this->db->query($query);
    return $result; 
  } 
}
?>
