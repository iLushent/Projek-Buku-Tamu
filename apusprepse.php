<?php

require "function.php";

$id = $_GET["id"];

if(apusRepse($id) > 0){
  echo "
        <script type='text/javascript'>
          alert('Data berhasil dihapus');
          window.location = 'apuseditrepse.php';
        </script>
    ";
}else{
  echo "
        <script type='text/javascript'>
          alert('Data gagal dihapus');
          window.location = 'apuseditrepse.php';
        </script>
    ";
}

?>