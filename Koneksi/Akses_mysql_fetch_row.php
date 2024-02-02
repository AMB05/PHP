<html>
    <head>
        <title>
            Koneksi Database MYSQL
        </title>
    </head>
    <body>
        <h1>
            Koneksi database dengan mysql_fetch_assoc
        </h1>
        <?
        $servername = "localhost"; 
        $database = "dbUniversitas"; 
        $username = "root"; 
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database)
        or die ("koneksi gagal");
        mysqli_select_db($conn, $database, );
        $hasil = mysqli_query($conn, "SELECT * FROM tMahasiswa");
        while ($row=mysqli_fetch_row($hasil)) {
            echo "tMahasiswa".$row[1];
        }
        ?>
    </body>
</html>