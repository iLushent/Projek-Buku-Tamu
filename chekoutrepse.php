<?php
require 'function.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE resepsionis SET status ='Checkout' WHERE id_repse = '$id'");

if($query){
    echo "
    <script type='text/javascript'>
        alert('pengunjung sudah keluar');
        window.location = 'rekapresepsionis.php';
    </script>
    ";
}

?>