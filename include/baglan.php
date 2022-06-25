<?php 
$hostadresi        =	"localhost";
$kullaniciadi      =	"root";
$sifre             =	"my-secret-pw";
$veritabani        =	"testDB";

$baglan = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
    echo "MySQL bağlantısı başarısız: " . mysqli_connect_error();
}
?>