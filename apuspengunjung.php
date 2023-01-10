<?php

require "function.php";

$id = $_GET["id"];

if(apusPengunjung($id) > 0){
  echo "
        <script type='text/javascript'>
          alert('Data berhasil dihapus');
          window.location = 'rekappengunjung.php';
        </script>
    ";
}else{
  echo "
        <script type='text/javascript'>
          alert('Data gagal dihapus');
          window.location = 'apuseditpengunjung.php';
        </script>
    ";
}

?>