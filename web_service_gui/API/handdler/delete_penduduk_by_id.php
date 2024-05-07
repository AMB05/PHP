<?php

function deletePendudukByID($id){
  global $dbConnection;

  $sqlStatement = $dbConnection->prepare("DELETE FROM penduduk WHERE id = ?");
  $sqlStatement->execute(array($id));

  $output = new stdClass();
  $output->deleted_id = $id;

  echo json_encode($output);
};