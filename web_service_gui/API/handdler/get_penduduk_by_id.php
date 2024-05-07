<?php

function getPendudukByID($id){
  global $dbConnection;

  $sqlStatement = $dbConnection->prepare("SELECT id, nama_lengkap, kode_kabupaten FROM penduduk WHERE id = ?");
  $sqlStatement->execute(array($id));

  $output = new stdClass();
  $output->data = $sqlStatement->fetch(PDO::FETCH_ASSOC);
  // $output->params = $params;

  echo json_encode($output);
};