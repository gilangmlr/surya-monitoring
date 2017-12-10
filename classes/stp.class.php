<?php
/**
* Inventory Class
* All inventory system needs
*
*/

require_once(__DIR__ . '/Db.class.php');

class STPClass
{
  public static $stp_arr = ['compA', 'compB', 'compC', 'compD', 'bak1', 'bak2', 'bak3', 'bak4', 'bak5', 'bak6', 'bakKontrol7', 'submerPump1', 'submerPump2', 'chlorine', 'boxPanel', 'panel', 'exhaustFan', 'ruangan', 'penerangan', 'lantai', 'atap', 'dinding', 'tangki', 'checkDate', 'checker', 'note', 'finding'];

  /**
  * Construct
  * 
  */
  public function __construct() {
    $this->db = new DB();
  }


  public function show_checklist()
  {
    $query = "SELECT * FROM stp WHERE true";
    $result = $this->db->query($query);
    return $result; 
  }

  public function add_stp($data) {
    $data['checker'] = 'staff' . rand();
    $stp_vals = [];

    $query = "INSERT INTO stp (" . implode(', ', STPClass::$stp_arr) . ") values ";
    foreach (STPClass::$stp_arr as $key => $value) {
      $stp_vals[$value] = "'$data[$value]'";
    }
    $query .= "(" . implode(", ", $stp_vals) . ")";

    $result = $this->db->query($query);

    var_dump($data, $query, $result); die();
    return $result;
  }
}
?>
