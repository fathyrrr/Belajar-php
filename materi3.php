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

<?php
function cekLogin($user, $pass) {
    if ($user == "admin" && $pass == "admin123") {
        return "Login berhasil! Selamat datang, " . $user;
    } else {
        return "Login gagal! Username atau password salah.";
    }
}
?>

<hr>
<h2>Login</h2>
<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = $_POST['password'];

    echo "<h4>" . cekLogin($u, $p) . "</h4>";
}
?>