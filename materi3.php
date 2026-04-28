<?php
function hello()
{
    echo "Selamat Datang";
}

hello();

function tambah(int $a, int $b): int
{
    return $a + $b;
}

function kali(int $a, int $b): int
{
    return $a * $b;
}


?>

<form method="POST">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="submit" value="kirim">
</form>

<?php
if (isset($_POST['a']) && isset($_POST['b'])) {
    $angka1 = $_POST['a'];
    $angka2 = $_POST['b'];
    echo tambah($angka1, $angka2);
    echo "<br>";
    echo kali($angka1, $angka2);
}
?>