<html>
    <head>
        <title>
            Koneksi Database MYSQL
        </title>
    </head>
    <body>
        <h1>
            Koneksi database dengan mysql_fetch_array
        </h1>
        
    </body>
    <?
        $servername = "localhost"; 
        $database = "dbUniversitas"; 
        $username = "root"; 
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database) or die("Koneksi Gagal");
        mysqli_select_db($conn, $database, );
        $hasil = mysqli_query($conn, "SELECT * FROM tMahasiswa");
        while ($row=mysqli_fetch_array($hasil)) {
            echo "tMahasiswa".$row["nim"];
            echo "tMahasiswa".$row["nama"];
            echo "tMahasiswa".$row["alamat"];
            echo "tMahasiswa".$row["umur"];
            echo "tMahasiswa".$row["kelas"];
            echo "tMahasiswa".$row["waktu"];
        }
        ?>
</html>
