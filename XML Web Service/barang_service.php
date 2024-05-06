<?php
// Mengaktifkan SOAP
ini_set("soap.wsdl_cache_enabled", "0");

// Include file yang mengandung definisi fungsi CRUD untuk barang
require_once 'barang_crud.php';

// Mendefinisikan lokasi WSDL file
$wsdl = "barang_service.wsdl";

// Membuat instance dari SoapServer
$server = new SoapServer($wsdl);

// Menambahkan definisi fungsi ke server
$server->addFunction("create_barang");
$server->addFunction("get_barang");
$server->addFunction("update_barang");
$server->addFunction("delete_barang");

// Memulai layanan
$server->handle();
?>
