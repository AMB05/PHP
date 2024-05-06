<?php
// Mengaktifkan SOAP
ini_set("soap.wsdl_cache_enabled", "0");

// Koneksi ke database MySQL
$mysqli = new mysqli("localhost", "username", "password", "data_barang"); //data_barang di ganti nama database yang dibuat

// Memeriksa koneksi
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}

// Fungsi untuk menambahkan barang baru
function create_barang($nama_barang, $jumlah)
{
    global $mysqli;
    $sql = "INSERT INTO barang (nama_barang, jumlah) VALUES ('$nama_barang', $jumlah)";
    if ($mysqli->query($sql) === TRUE) {
        return "Barang baru berhasil ditambahkan";
    } else {
        return "Error: " . $sql . "<br>" . $mysqli->error;
    }
}

// Fungsi untuk mendapatkan semua barang
function get_all_barang()
{
    global $mysqli;
    $sql = "SELECT * FROM barang";
    $result = $mysqli->query($sql);
    $barang = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $barang[] = $row;
        }
    }
    return $barang;
}

// Fungsi untuk memperbarui informasi barang
function update_barang($id, $nama_barang, $jumlah)
{
    global $mysqli;
    $sql = "UPDATE barang SET nama_barang='$nama_barang', jumlah=$jumlah WHERE id=$id";
    if ($mysqli->query($sql) === TRUE) {
        return "Informasi Barang berhasil diperbarui";
    } else {
        return "Error updating record: " . $mysqli->error;
    }
}

// Fungsi untuk menghapus barang
function delete_barang($id)
{
    global $mysqli;
    $sql = "DELETE FROM barang WHERE id=$id";
    if ($mysqli->query($sql) === TRUE) {
        return "Barang berhasil dihapus";
    } else {
        return "Error deleting record: " . $mysqli->error;
    }
}

// Membuat instance dari SoapServer
$server = new SoapServer("barang_service.wsdl");

// Menambahkan definisi fungsi ke server
$server->addFunction("create_barang");
$server->addFunction("get_all_barang");
$server->addFunction("update_barang");
$server->addFunction("delete_barang");

// Memulai layanan
$server->handle();
?>
