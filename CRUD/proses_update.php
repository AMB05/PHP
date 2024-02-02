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
    
    // update data berdasarkan id_produk yg dikirimkan
    $q = $conn->query("UPDATE tMahasiswa SET nama = '$nama', alamat = '$alamat', umur = '$umur', kelas = '$kelas', waktu = '$waktu' WHERE nim = '$nim'");

    if ($q) {
        // pesan jika data berubah
        echo "<script>alert('Data Mahasiswa berhasil diubah'); window.location.href='index.php'</script>";
    } else {
        // pesan jika data gagal diubah
        echo "<script>alert('Data Mahasiswa gagal diubah'); window.location.href='index.php'</script>";
    }
} 
else
{
    // jika coba akses langsung halaman ini akan diredirect ke halaman index
    header('Location: index.php');
}