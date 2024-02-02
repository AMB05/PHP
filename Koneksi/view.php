<? 
$servername = "localhost"; 
$database = "dbUniversitas"; 
$username = "root"; 
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database)
or die ("koneksi gagal"); 
mysqli_select_db($conn, $database);

$hasil = mysqli_query($conn, "SELECT * FROM tMahasiswa"); 
$jumlah = mysqli_num_rows($hasil); 
echo "<center>DATA MAHASISWA</center>"; 
echo "Jumlah MAHASISWA : $jumlah"; 
$a=1; 
while($baris = mysqli_fetch_array($hasil)) 
{ 
    echo "<br>"; 
    echo $a; 
    echo "<br>"; 
    echo "nim : "; 
    echo $baris[0]; 
    echo "<br>"; 
    echo "nama : "; 
    echo $baris[1]; 
    echo "<br>"; 
    echo "alamat : "; 
    echo $baris[2]; 
    echo "<br>"; 
    echo "umur : "; 
    echo $baris[3]; 
    echo "<br>"; 
    echo "kelas : "; 
    echo $baris[4]; 
    echo "<br>"; 
    echo "waktu : "; 
    echo $baris[5]; 
    $a++; 
} 
?> 