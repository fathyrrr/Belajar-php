<form action="" method="post">
    Username : <input type="text" name="username"><br>
    Password : <input type="password" name="password"><br>
    Nama : <input type="text" name="nama"><br>
    Email : <input type="text" name="email"><br>
    <input type="submit" value="Kirim data" name= "Kirim"><br>
</form>

<?php
include 'koneksi.php';

// --- TAMBAHAN FUNCTION ---
function hapusData($koneksi, $id) {
    $query = "DELETE FROM user WHERE id = $id";
    if (mysqli_query($koneksi, $query)) {
        return "Data berhasil dihapus";
    } else {
        return "Data gagal dihapus";
    }
}

// Logika Tambah Data (Tetap)
if (isset($_POST['Kirim'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $query = "INSERT INTO user (username,password,nama,email) VALUES ('$username', '$password', '$nama', '$email')";

    if (mysqli_query($koneksi, $query)){
        echo "Data berhasil ditambahkan";
    } else{
        echo "Data gagal ditambahkan";
    }
}

// Logika Hapus Data (Dipindah ke atas agar tabel langsung update setelah hapus)
if (isset($_GET['aksi']) && $_GET['aksi'] == 'hapus' && isset($_GET['id'])){
    $id = $_GET['id'];
    echo hapusData($koneksi, $id); // Memanggil function
}
?>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php
    $query = "SELECT * FROM user";
    $result = mysqli_query($koneksi, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>
                <a href='materi4.php?aksi=edit&id=". $row['id']."'>Edit</a> | 
                <a href='materi4.php?aksi=hapus&id=" . $row['id'] ."'>Hapus</a>
              </td>";
        echo "</tr>";
    }
    ?>
</table>


<?php 
if (isset($_GET['aksi']) && $_GET['aksi'] == 'edit' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    $username = $row['username'];
    $password = $row['password'];
    $nama     = $row['nama'];
    $email    = $row['email'];

    echo "<h3>Mode Edit Data</h3>";
    echo "<form action='' method='post'>";
    echo "<input type='hidden' name='id_edit' value='$id'>"; 
    
    echo "Username : <input type='text' name='username' value='$username'><br>";
    echo "Password : <input type='text' name='password' value='$password'><br>";
    echo "Nama : <input type='text' name='nama' value='$nama'><br>";
    echo "Email : <input type='text' name='email' value='$email'><br>";
    echo "<input type='submit' value='Update Data' name='Update'><br>";
    echo "</form>";
}

if (isset($_POST['Update'])) {
    $id_update = $_POST['id_edit']; 
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $nama      = $_POST['nama'];
    $email     = $_POST['email'];

    $query = "UPDATE user SET 
              username='$username', 
              password='$password', 
              nama='$nama', 
              email='$email' 
              WHERE id=$id_update";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diupdate!'); window.location='materi4.php';</script>";
    } else {
        echo "Data gagal diupdate: " . mysqli_error($koneksi);
    }
}