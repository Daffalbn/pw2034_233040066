<?php 
//cek apakah tombol submit sudah tekan atau belum
if(isset($_POST["submit"])){
//cek username dan password
    if ($_POST["name"]=="admin" && $_POST["pass"]=="123"){
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
        //jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <ul>
<form action="" method="post">
    <h1>Login Admin</h1>
    
    <?php if(isset($error)): ?>
    <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif;?>

    <li>
        <label for="username">Username :</label>
        <input type="text" name="name" id="username">
    </li>
    <li>
        <label for="Pass">Password :</label>
        <input type="password" name="pass" id="Pass">
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>
</form>
</ul>

</body>
</html>