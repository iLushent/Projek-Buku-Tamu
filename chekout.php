<?php
require 'function.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE pengunjung SET status ='Checkout' WHERE id_pengunjung= '$id'");

if($query){
    echo "
    <script type='text/javascript'>
        alert('pengunjung sudah keluar');
        window.location = 'rekappengunjung.php';
    </script>
    ";
}

?>