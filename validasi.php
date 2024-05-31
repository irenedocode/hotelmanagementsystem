<?php

$koneksi = mysqli_connect("localhost", "root", "", "user");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $cekuser = mysqli_query($koneksi, $query);

    if ($cekuser && mysqli_num_rows($cekuser) > 0) {
        echo "<script>
                alert('Welcome');
                window.location.href = 'menu.php';
              </script>";
        exit();
    } else {
        echo "<script>
                alert('Password or Username invalid');
                window.location.href = 'index.php';
              </script>";
        exit();
    }
}

?>
