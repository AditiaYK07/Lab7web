<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <title></title>
</head>
<body style="background-color: #CFF5E7;">
<h2> DATA DIRI </h2>
<fieldset>
<?php
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$job = $_POST['job'];
echo "Nama: $nama <br/>";
echo "Tanggal lahir: $tanggal <br/>";
echo "Pekerjaan: $job <br/>";

$lahir = new DateTime ($tanggal);
$sekarang = new DateTime ('today');
if ($lahir > $sekarang){
$thn= "0";
$bln= "0";
$tgl="0";
}
$thn = $sekarang->diff ($lahir)->y;
$bln = $sekarang->diff ($lahir)->m;
$tgl = $sekarang->diff ($lahir)->d;
echo "Umur: " .$thn. " tahun ". $bln. " bulan ". $tgl. ' hari <br/> ';


$ASN = 4500000;
$POLISI = 5000000;
$TNI = 5000000;
$SWASTA = 4750000;
$WIRAUSAHA = 8000000;

if ($job == 'ASN')
{
          printf("Gaji yang diterima Rp. $ASN <br/> ");
}
else if ($job == 'POLISI')
{
          printf("Gaji yang diterima Rp. $POLISI <br/> ");
}
else if ($job == 'TNI')
{
          printf("Gaji yang diterima Rp. $TNI <br/> ");
}
else if ($job == 'SWASTA')
{
          printf("Gaji yang diterima Rp. $SWASTA <br/> ");
}
else if ($job == 'WIRAUSAHA')
{
          printf("Gaji yang diterima Rp. $WIRAUSAHA <br/> ");
}

?>
</fieldset>
</body>
</html>