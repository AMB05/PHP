<?php
require_once 'koneksi.php';

// cek id
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // ambil data berdasarkan nim
  $q = $conn->query("SELECT * FROM tMahasiswa WHERE nim = '$nim'");

  foreach ($q as $dt) :
  ?>

  <h1>PRAKTIKUM CRUD SEDERHANA</h1>
  <h2>Halaman Ubah Data Mahasiswa</h2>

  <form action="proses_update.php" method="post">
    <input type="number" name="nim" value="<?= $dt['nim'] ?>">
    <input type="text" name="nama" value="<?= $dt['nama'] ?>">
    <input type="text" name="alamat" value="<?= $dt['alamat'] ?>">
    <input type="number" name="umur" value="<?= $dt['umur'] ?>">
    <input type="number" name="kelas" value="<?= $dt['kelas'] ?>">
    <input type="datetime" name="waktu" value="<?= $dt['waktu'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>

  <?php
  endforeach;
}