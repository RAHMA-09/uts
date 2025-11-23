<?php
session_start();

// Jika tombol login ditekan
if (isset($_POST['login'])) {

    // Ambil data dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Data login statis sesuai soal
    $valid_username = "admin";
    $valid_password = "1234";

    // Periksa kecocokan username dan password
    if ($username === $valid_username && $password === $valid_password) {

        // Jika benar → buat session
        $_SESSION['username'] = $username;

        // Arahkan ke dashboard
        header("Location: dashboard.php");
        exit();

    } else {

        // Jika salah → tampilkan pesan error
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>POLGAN MART - Login</title>
</head>
<body>

<h2>POLGAN MART - Halaman Login</h2>

<?php
// Tampilkan error jika ada
if (isset($error)) {
    echo "<p style='color:red;'><b>$error</b></p>";
}
?>

<form action="" method="POST">
    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <button type="submit" name="login">Login</button>
</form>

</body>
</html>