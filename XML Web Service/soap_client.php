<?php
// Mendefinisikan lokasi WSDL file
$wsdl = "http://example.com/barang_service.wsdl"; // Ganti dengan URL yang sesuai

// Membuat instance dari SoapClient
$client = new SoapClient($wsdl, array('cache_wsdl' => WSDL_CACHE_NONE));

// Fungsi untuk menambahkan barang baru
function tambahBarang($nama_barang, $jumlah)
{
    global $client;
    $result = $client->createBarang(array('nama_barang' => $nama_barang, 'jumlah' => $jumlah));
    return $result->result;
}

// Fungsi untuk mendapatkan informasi barang berdasarkan ID
function dapatkanBarang($id)
{
    global $client;
    $result = $client->getBarang(array('id' => $id));
    return $result->result;
}

// Fungsi untuk memperbarui informasi barang
function perbaruiBarang($id, $nama_barang, $jumlah)
{
    global $client;
    $result = $client->updateBarang(array('id' => $id, 'nama_barang' => $nama_barang, 'jumlah' => $jumlah));
    return $result->result;
}

// Fungsi untuk menghapus barang
function hapusBarang($id)
{
    global $client;
    $result = $client->deleteBarang(array('id' => $id));
    return $result->result;
}

// Contoh penggunaan fungsi-fungsi di atas:
echo tambahBarang('Laptop', 5) . "\n"; // Menambahkan barang baru
echo dapatkanBarang(1) . "\n";         // Mendapatkan informasi barang dengan ID 1
echo perbaruiBarang(1, 'Laptop', 8) . "\n"; // Memperbarui informasi barang dengan ID 1
echo hapusBarang(1) . "\n";           // Menghapus barang dengan ID 1
?>
