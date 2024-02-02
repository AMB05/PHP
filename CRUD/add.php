<?php
require_once 'koneksi.php';

if (isset($_POST['submit'])) 
{
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];
    $kelas = $_POST['kelas'];
    $waktu = $_POST['waktu'];

    // id_produk bernilai '' karena kita set auto increment
    $q = $conn->query("INSERT INTO tMahasiswa VALUES ('', '$nim', '$nama', '$alamat', '$umur', '$kelas', '$waktu')");

    if ($q) {
        // pesan jika data tersimpan
        echo "<script>alert('Data Mahasiswa berhasil ditambahkan'); window.location.href='index.php'</script>";
    } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='index.php'</script>";
    }
} 
else 
{
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: index.php');
}
?>