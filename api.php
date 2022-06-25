<?php
// sunucu, veritabanı ve diğer ayarlar
include 'include/baglan.php';
// hakkinda
$sorgu = "SELECT * FROM testTable";
$sonuc = mysqli_query($baglan, $sorgu);
$satir_sayisi = mysqli_num_rows($sonuc);
// echo mysqli_error($baglanti);

if ($sonuc) {
    while ($satir = mysqli_fetch_array($sonuc)) {
        $cikti[] = $satir;
    }
}
echo json_encode($cikti, JSON_UNESCAPED_UNICODE);