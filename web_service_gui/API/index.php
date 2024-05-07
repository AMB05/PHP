<?php

require_once($_SERVER['DOCUMENT_ROOT']."/api/connection.php");
require_once($_SERVER['DOCUMENT_ROOT']."/api/route.php");

require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/post_penduduk.php");
require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/delete_penduduk_by_id.php");
require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/get_all_penduduk.php");
require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/get_penduduk_by_id.php");

require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/get_bi_penduduk_per_kab.php");
require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/get_bi_penduduk_per_usia.php");
require_once($_SERVER['DOCUMENT_ROOT']."/api/handlers/get_bi_penduduk_per_bulan_tahun_lahir.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
header('Content-Type: application/json; charset=utf-8');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method,Access-Control-Request-Headers, Authorization");

// OPERASIONAL
// Tambah Penduduk
Route::add('/api/index.php/penduduk', function() {postPenduduk();}, 'post');

// Lihat semua Penduduk
Route::add('/api/index.php/penduduk', function() {getAllPenduduk();}, 'get');

// Lihat Penduduk berdasarkan ID 
Route::add('/api/index.php/penduduk/([0-9]*)', function($id) {getPendudukByID($id);}, 'get');

// Hapus Penduduk berdasarkan ID 
Route::add('/api/index.php/penduduk/([0-9]*)', function($id) {deletePendudukByID($id);}, 'delete');

// BUSINESS INTELLIGENCE / DECISION SUPPORT
// Jumlah Penduduk per kabupaten - Grafik batang 
Route::add('/api/index.php/bi/penduduk/distribusi-kabupaten', function() {getBIPendudukPerKab();}, 'get');

// Jumlah Penduduk per rentang usia - Grafik batang
Route::add('/api/index.php/bi/penduduk/distribusi-usia', function() {getBIPendudukPerUsia();}, 'get');

// Bulan tahun terbanyak lahir - Grafik kalender
Route::add('/api/index.php/bi/penduduk/distribusi-bulan-tahun-lahir', function() {getBIPendudukBulanTahunLahir();}, 'get');


Route::add('/api/index.php/(.*)', function() {}, 'options');
Route::run('/');