<?php
require 'function.php';

$id = $_GET["id"];
$query = mysqli_query($conn, "UPDATE gtk SET status ='Checkin' WHERE id_gtk = '$id'");

if($query){
    echo "
    <script type='text/javascript'>
        alert('data sudah masuk');
        window.location = 'rekapgtk.php';
    </script>
    ";
}

?>