<?php

// POST content: $_POST
// JSON POST content: file_get_contents('php://input')

function postPenduduk(){
  global $dbConnection;

  $payload = json_decode(file_get_contents('php://input'));

  $sqlStatement = $dbConnection->prepare("INSERT INTO penduduk (nama_lengkap, kode_kabupaten, nomor_hp, gender, tanggal_lahir, ijazah_terakhir, pekerjaan, penghasilan_bulanan) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

  $sqlStatement->execute(array(
    $payload->nama_lengkap,
    $payload->kode_kabupaten,
    $payload->nomor_hp,
    $payload->gender,
    $payload->tanggal_lahir,
    $payload->ijazah_terakhir,
    $payload->pekerjaan,
    $payload->penghasilan_bulanan
  ));

  $output = new stdClass();
  $output->inserted = $payload;
  $output->inserted_id = $dbConnection->lastInsertId();

  echo json_encode($output);
};