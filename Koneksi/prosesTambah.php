<HTML> 
    <HEAD> 
        <title>Simpan Buku Tamu</title> 
    </HEAD> 
    <BODY> 
        <h1>Simpan Buku Tamu MySQL</h1> 
        <? 
        $servername = "localhost"; 
        $database = "dbUniversitas"; 
        $username = "root"; 
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database)
        or die ("koneksi gagal"); 
        mysqli_select_db($conn, $database);

        $nim = $_POST["nim"]; 
        $nama = $_POST["nama"]; 
        $alamat = $_POST["alamat"]; 
        $umur= $_POST["umur"]; 
        $kelas= $_POST["kelas"]; 
        $waktu = $_POST["waktu"]; 
        echo "nim : $nim <br>"; 
        echo "nama : $nama <br>"; 
        echo "alamat : $alamat <br>"; 
        echo "umur : $umur <br>"; 
        echo "kelas : $kelas <br>"; 
        echo "waktu : $waktu <br>"; 
        $sqlstr="INSERT INTO tMahasiswa (nim, nama, alamat, umur, kelas, waktu) 
                values ('$nim','$nama','$alamat','$umur','$kelas,'$waktu')"; 
        $hasil = mysqli_query($conn, $sqlstr); 
        echo "iNPUT DATA BERHASIL DILAKUKAN"; 
        ?> 
    </BODY> 
</HTML>