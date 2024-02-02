<? 
$kolom=$_POST['kolom']; 
$cari=$_POST['cari']; 

$servername = "localhost"; 
$database = "dbUniversitas"; 
$username = "root"; 
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database)
or die ("koneksi gagal"); 
mysqli_select_db($conn, $database);

$hasil=mysqli_query($conn, "SELECT * FROM tMahasiswa where 
                    $kolom like '%$cari%'"); 
$jumlah=mysqli_num_rows($hasil); 
echo "<br>"; 
echo "Ditemukan: $jumlah"; 
echo "<br>"; 
while($baris=mysqli_fetch_array($hasil)) 
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