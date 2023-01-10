<?php
require 'function.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE resepsionis SET status ='Checkin' WHERE id_repse = '$id'");

if($query){
    echo "
    <script type='text/javascript'>
        alert('data sudah masuk');
        window.location = 'rekapresepsionis.php';
    </script>
    ";
}

?>