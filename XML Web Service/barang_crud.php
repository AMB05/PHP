<?php
// Fungsi untuk membuat barang baru
function create_barang($nama_barang, $jumlah)
{
    // Proses penyimpanan barang ke dalam database atau file XML
    // Di sini, Anda bisa menambahkan logika untuk menyimpan ke database atau file XML
    // Contoh implementasi sederhana: hanya mencetak informasi barang yang dibuat
    $response = "Barang baru telah berhasil ditambahkan: Nama Barang = $nama_barang, Jumlah = $jumlah";
    return $response;
}

// Fungsi untuk mendapatkan informasi barang berdasarkan ID
function get_barang($id)
{
    // Proses pencarian barang dari database atau file XML berdasarkan ID
    // Di sini, Anda bisa menambahkan logika untuk mendapatkan barang dari database atau file XML
    // Contoh implementasi sederhana: hanya mencetak informasi barang yang ditemukan
    $response = "Informasi Barang dengan ID $id: Nama Barang = Printer, Jumlah = 10";
    return $response;
}

// Fungsi untuk mengupdate informasi barang
function update_barang($id, $nama_barang, $jumlah)
{
    // Proses update informasi barang di database atau file XML
    // Di sini, Anda bisa menambahkan logika untuk mengupdate barang di database atau file XML
    // Contoh implementasi sederhana: hanya mencetak informasi barang yang diupdate
    $response = "Informasi Barang dengan ID $id telah berhasil diupdate: Nama Barang = $nama_barang, Jumlah = $jumlah";
    return $response;
}

// Fungsi untuk menghapus barang
function delete_barang($id)
{
    // Proses penghapusan barang dari database atau file XML
    // Di sini, Anda bisa menambahkan logika untuk menghapus barang dari database atau file XML
    // Contoh implementasi sederhana: hanya mencetak konfirmasi penghapusan barang
    $response = "Barang dengan ID $id telah berhasil dihapus";
    return $response;
}
?>
