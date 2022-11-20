<h3> OPERATOR </h3>
<?php
$gaji = 1000000;
$pajak = 0.1 ;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>

<h3> KONDISI IF </h3>
<?php
$nama_hari = "sunday";
if ($nama_hari == "sunday") {
    echo "minggu";
} elseif ($nama_hari == "monday") {
    echo "senin";
} else {
    echo "selasa";
}
?>
<h3> KONDISI SWITCH </h3>
<?php
$nama_hari = date("1");
switch ($nama_hari) {
    case "sunday":
        echo "minggu";
        break;
    case "monday":
        echo "senin";
        break;
    case "tuesday":
        echo "selasa";
        break;
    default :
        echo "sabtu";
}
?>
<h3> PERULANGAN FOR </h3>
<?php
echo "perulangan 1 sampai 10 <br/>";
for ($i=1; $i<= 10; $i++) {
    echo "perulangan ke : " . $i . '<br/>';
}

echo "perulangan menurun dari 10 ke 1 <br/>";
for ($i=10; $i>=1; $i--){
    echo 'perulagan ke: '. $i . '<br/>';
}
?>
<h3> PERULANGAN WHILE </h3>
<?php
echo "perulangan 1 sampai 10 <br?>";
$i= 1;
while ($i == 10){
    echo "perulangan ke: " . $i . "<br/";
    $i++ ;
}
?>
<h3> PERULANGAN DOWHILE </h3>
<?php
echo "perulangan 1 sampai 10 <br/>";
$i=1;
do {
    echo "perulangan ke: " . $i . "<br/>";
    $i++;
} while ($i <=10);
?>