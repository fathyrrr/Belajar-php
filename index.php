<?php
//Materi Variabel dan Tipe Data
$nama = "Budi";
$umur = 20;
$tinggi = 175.9;
$hobi = array("membaca", "berenang", "bermain gitar");
echo "Nama saya $nama, umur saya $umur tahun, tinggi saya $tinggi cm, dan hobi saya $hobi[1]";

echo "<hr>"; 

//Operator dan Kondisi (if Else)

// OPERATOR ARITMATIKA
$a = 10;
$b = 3;

echo "Hasil Penjumlahan: " . ($a + $b) . "<br>";    
echo "Hasil Pengurangan: " . ($a - $b) . "<br>";    
echo "Hasil Perkalian: " . ($a * $b) . "<br>";      
echo "Hasil Pembagian: " . ($a / $b) . "<br>";      

echo "<hr>";

// OPERATOR DAN KONDISI (IF ELSE) 

$nilai = 85;

echo "Nilai Anda: $nilai <br>";

if ($nilai >= 90) {
    echo "Hasil: Lulus dengan Predikat A";
} elseif ($nilai >= 75) {
    echo "Hasil: Lulus dengan Predikat B";
} elseif ($nilai >= 60) {
    echo "Hasil: Lulus dengan Predikat C";
} else {
    echo "Hasil: Tidak Lulus (Predikat D)";
}

echo "<br>";

// Angka genap/ganjil menggunakan modulus
if ($a % 2 == 0) {
    echo "Angka $a adalah bilangan GENAP";
} else {
    echo "Angka $a adalah bilangan GANJIL";
}