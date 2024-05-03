<?php
// Konfigurasi server
$server_ip = '127.0.0.1';
$server_port = 8000;

// Data yang akan dikirim
$data = "Hello, world!";

// Membuat koneksi TCP/IP
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "Gagal membuat soket: " . socket_strerror(socket_last_error());
    exit;
}

// Menghubungkan ke server
$result = socket_connect($socket, $server_ip, $server_port);
if ($result === false) {
    echo "Gagal menghubungkan ke server: " . socket_strerror(socket_last_error($socket));
    exit;
}

// Mengirim data ke server
socket_write($socket, $data, strlen($data));

// Menerima balasan dari server
$reply = socket_read($socket, 1024);
echo "Server replied: " . $reply . PHP_EOL;

// Menutup koneksi
socket_close($socket);
?>
