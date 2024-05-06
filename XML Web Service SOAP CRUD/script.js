function tambahBarang() {
    var nama = document.getElementById("nama").value;
    var jumlah = document.getElementById("jumlah").value;
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://example.com/barang_service.php", true); //example.com di ganti link yang bener
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
            // Tampilkan pesan sukses atau kesalahan
        }
    };
    xhr.send("nama_barang=" + nama + "&jumlah=" + jumlah);
}

// Fungsi-fungsi lain untuk CRUD (baca, update, hapus) bisa ditambahkan di sini
