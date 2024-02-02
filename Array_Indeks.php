<?
echo "Contoh 1";
$nama[] ="Arriva";
$nama[] ="Riva";
$nama[] ="Rival";

echo "Hallo";
echo "Input array \$nama[0] adalah $nama[0]";
echo "<BR>";
echo "Input array \$nama[1] adalah $nama[1]";
echo "<BR>";
echo "Input array \$nama[2] adalah $nama[2]";
echo "<BR>"; 

echo "Contoh 2";
$nama[0] ="Arriva";
$nama[1] ="Riva";
$nama[2] ="Rival";

echo "Hallo";
echo "Isi array \$nama[0] adalah $nama[0]";
echo "<BR>";
echo "Isi array \$nama[1] adalah $nama[1]";
echo "<BR>";
echo "Isi array \$nama[2] adalah $nama[2]";
echo "<BR>";

echo "Contoh 3";
$nama[0] ="Arriva";
$nama[1] ="Riva";
$nama[2] ="Rival";

foreach ($nama as $value)
{
    echo"Nama :  $value";
    echo"<BR>";
}
?>