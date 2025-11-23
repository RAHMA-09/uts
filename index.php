<?php
session_start();

$error = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // DATA LOGIN STATIS
    $user = "admin";
    $pass = "1234";

    if ($username == $user && $password == $pass) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>POLGAN MART - Login</title>
</head>
<body>

<h2>Login ke POLGAN MART</h2>

<?php if ($error != "") { ?>
    <p style="color:red;"><?= $error ?></p>
<?php } ?>

<form action="" method="POST">
    <label>Username :</label><br>
    <input type="text" name="username"><br><br>

    <label>Password :</label><br>
    <input type="password" name="password"><br><br>

    <button type="submit" name="login">Login</button>
    <button type="reset">Batal</button>
</form>

</body>
</html>