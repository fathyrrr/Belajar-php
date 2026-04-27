<form method="POST">
    Masukkan Angka : <input type="number" name="angka"<br>
    <input type="submit" value="Kirim">
</form>

<?php
if(isset($_POST['angka'])){
    $data = $_POST['angka'];
    for($i=1; $i<=$data;$i++){
     if($i % 2 == 0){
            echo "Angka $i adalah Genap <br>";
        } else {
            echo "Angka $i adalah Ganjil <br>";
        }  
    }


}

// Looping while dan do while

echo "<br><b>while loop</b><br>";

if (isset($_POST["angka"])) {
    $data = $_POST["angka"];
    $i = 1;
    while ($i <= $data) {
        // Cek ganjil genap
        if ($i % 2 == 0) {
            echo "nilai a adalah $i (Genap)<br>";
        } else {
            echo "nilai a adalah $i (Ganjil)<br>";
        }
        $i++;
    }
}

echo "<br><br><b>do while loop</b><br>";
$a = 10;
do {
    // Cek ganjil genap
    if ($a % 2 == 0) {
        echo "nilai a adalah $a (Genap)<br>";
    } else {
        echo "nilai a adalah $a (Ganjil)<br>";
    }
    $a--;
} while ($a >= 5);