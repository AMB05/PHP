<?php

function getBIPendudukBulanTahunLahir(){
  global $dbConnection;

  $sqlStatement = $dbConnection->prepare("SELECT * FROM bi_penduduk_per_bulan_tahun_lahir");
  $sqlStatement->execute();

  $output = new stdClass();
  $output->data = $sqlStatement->fetchall(PDO::FETCH_ASSOC);

  echo json_encode($output);
};