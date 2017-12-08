<?php
  require_once(__DIR__ . '/Db.class.php');

  $db = new DB();

  if ($_REQUEST['mode'] == 'add_stp') {
    $stp_checklist = ['compA', 'compB', 'compC', 'compD', 'bak1', 'bak2', 'bak3', 'bak4', 'bak5', 'bak6', 'bakKontrol7', 'submerPump1', 'submerPump2', 'chlorine', 'boxPanel', 'panel', 'exhaustFan', 'ruangan', 'penerangan', 'lantai', 'atap', 'dinding', 'tangki', 'checkDate', 'checker', 'note', 'finding'];
    $_REQUEST['checker'] = 'staff' . rand();

    $stp_vals = [];
    $query = "INSERT INTO stp (" . implode(', ', $stp_checklist) . ") values ";
    foreach ($stp_checklist as $key => $value) {
      $stp_vals[$value] = "'$_REQUEST[$value]'";
    }
    $query .= "(" . implode(", ", $stp_vals) . ")";

    $result = $db->query($query);

    $db->CloseConnection();

    header("Location: ./report.php");
  }
?>