<?php 

require 'koneksi.php';

$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "Repsesionis"){
        session_start();

        $_SESSION["email"] = $data["email"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["roles"] = $data["roles"];
        header("Location: admin.php");
    }else if($data["roles"] == "Tamu"){
        session_start();

        $_SESSION["email"] = $data["email"];
        $_SESSION["password"] = $data["password"];
        $_SESSION["roles"] = $data["roles"];

        header("Location: index.php");
    }
}else{
    echo '
        <script type="text/javascript">
            alert("Akun tidak ditemukan");
            window.location: "index.php";
        </script>
    ';
}





?>