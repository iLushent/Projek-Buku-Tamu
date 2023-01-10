<?php
require 'function.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE gtk SET status ='Checkout' WHERE id_gtk= '$id'");

if($query){
    echo "
    <script type='text/javascript'>
        alert('pengunjung sudah keluar');
        window.location = 'rekapgtk.php';
    </script>
    ";
}

?>