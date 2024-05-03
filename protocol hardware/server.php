<?php
// Konfigurasi server
$host = '0.0.0.0'; // Mendengarkan semua alamat IP
$port = 8000;

// Membuat soket TCP/IP
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if ($socket === false) {
    echo "Gagal membuat soket: " . socket_strerror(socket_last_error());
    exit;
}

// Membuat soket terhubung ke alamat dan port
$result = socket_bind($socket, $host, $port);
if ($result === false) {
    echo "Gagal melakukan binding soket ke alamat/port: " . socket_strerror(socket_last_error($socket));
    exit;
}

// Mendengarkan koneksi masuk
$result = socket_listen($socket, 3);
if ($result === false) {
    echo "Gagal mendengarkan koneksi masuk: " . socket_strerror(socket_last_error($socket));
    exit;
}

echo "Server siap menerima koneksi..." . PHP_EOL;

do {
    // Menerima koneksi
    $client_socket = socket_accept($socket);
    if ($client_socket === false) {
        echo "Gagal menerima koneksi: " . socket_strerror(socket_last_error($socket));
        break;
    }

    // Menerima data dari klien
    $input = socket_read($client_socket, 1024);
    echo "Data yang diterima dari klien: " . $input . PHP_EOL;

    // Mengirim balasan ke klien
    $output = "Pesan diterima oleh server: " . $input;
    socket_write($client_socket, $output, strlen($output));
    echo "Balasan telah dikirim ke klien: " . $output . PHP_EOL;

    // Menutup koneksi dengan klien
    socket_close($client_socket);
} while (true);

// Menutup soket server
socket_close($socket);
?>
