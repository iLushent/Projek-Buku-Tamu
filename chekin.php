<?php
require 'function.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE pengunjung SET status ='Checkin' WHERE id_pengunjung = '$id'");

if($query){
    echo "
    <script type='text/javascript'>
        alert('data sudah masuk');
        window.location = 'rekappengunjung.php';
    </script>
    ";
}

?>