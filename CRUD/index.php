<?php
// memanggil koneksi.php
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>PRAKTIKUM CRUD SEDERHANA</title>
</head>
<body>
  <h1>PRAKTIKUM CRUD SEDERHANA</h1>
  
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="number" name="nim" placeholder="nim">
    <input type="text" name="nama" placeholder="nama">
    <input type="text" name="alamat" placeholder="alamat">
    <input type="number" name="umur" placeholder="umur">
    <input type="number" name="kelas" placeholder="kelas">
    <input type="datetime" name="waktu" placeholder="waktu">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>

  <!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>Nim</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Umur</th>
      <th>Kelas</th>
      <th>Waktu</th>
      <th colspan="2">Aksi</th>
    </tr>

    <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM tMahasiswa");

    $no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>

    <tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nim'] ?></td>
      <td><?= $dt['nama'] ?></td>
      <td><?= $dt['alamat'] ?></td>
      <td><?= $dt['umur'] ?></td>
      <td><?= $dt['kelas'] ?></td>
      <td><?= $dt['waktu'] ?></td>
      <td><a href="update.php?id=<?= $dt['nim'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['nim'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>

    <?php
    endwhile;
    ?> 

  </table>
</body>
</html>