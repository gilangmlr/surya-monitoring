<?php
  require_once(__DIR__ . '/classes/stp.class.php');

  if ($_REQUEST['mode'] == 'add_stp') {
    $stpClass = new STPClass();

    $result = $stpClass->add_stp($_REQUEST);

    header("Location: ./report.php");
  }
?>