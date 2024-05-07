<?php

function getAllPenduduk(){
  global $dbConnection;

  if(isset($params)) {
    $params = $_SERVER['QUERY_STRING'];
  } else {
    $params = false;
  }


  $sqlStatement = $dbConnection->prepare("
    SELECT p.id, p.nama_lengkap, kk.deskripsi as kabupaten FROM penduduk p
    INNER JOIN kode_kabupaten kk ON p.kode_kabupaten = kk.kode 
    ORDER BY p.id DESC
  ");
  $sqlStatement->execute();

  $output = new stdClass();
  $output->data = $sqlStatement->fetchall(PDO::FETCH_ASSOC);
  $output->params = $params;

  echo json_encode($output);
};