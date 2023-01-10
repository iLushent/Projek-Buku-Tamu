<?php

require 'koneksi.php';

function query($query){
  global $conn;

  $rows = [];
  $result = mysqli_query($conn, $query);
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }

  return $rows;

}

//PENGUNJUNG

function tambahPengunjung($data){
  global $conn;


  $tanggal = htmlspecialchars ($data["tanggal"]);
  $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
  $asal_pengunjung = htmlspecialchars ($data["asal_pengunjung"]);
  $keperluan = htmlspecialchars ($data["keperluan"]);
  $tujuan = htmlspecialchars ($data["tujuan"]);
  $no_hp = htmlspecialchars ($data["no_hp"]);
  $status = htmlspecialchars ($data["status"]);

  $query = "INSERT INTO pengunjung VALUES (NULL, '$tanggal', '$nama_lengkap', '$asal_pengunjung', '$keperluan', '$tujuan', '$no_hp', '$status')";
  
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
function apusPengunjung($id){
  global $conn;

  mysqli_query($conn, "DELETE FROM pengunjung WHERE id_pengunjung = '$id'");
  return mysqli_affected_rows($conn);
}
function editPengunjung($data){
  global $conn;

  $id = htmlspecialchars ($data["id_pengunjung"]);
  $tanggal = htmlspecialchars ($data["tanggal"]);
  $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
  $asal_pengunjung = htmlspecialchars ($data["asal_pengunjung"]);
  $keperluan = htmlspecialchars ($data["keperluan"]);
  $tujuan = htmlspecialchars ($data["tujuan"]);
  $no_hp = htmlspecialchars ($data["no_hp"]);
  $status = htmlspecialchars ($data["status"]);

  $query = "UPDATE pengunjung SET
  tanggal = '$tanggal',
  nama_lengkap = '$nama_lengkap',
  asal_pengunjung = '$asal_pengunjung',
  keperluan = '$keperluan',
  tujuan = '$tujuan',
  no_hp = '$no_hp',
  status = '$status' WHERE id_pengunjung = '$id'";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

//REPSESIONIS

function tambahResepsionis($data){
  global $conn;

  $tanggal = htmlspecialchars ($data["tanggal"]);
  $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
  $roles = htmlspecialchars ($data["roles"]);
  $no_hp = htmlspecialchars ($data["no_hp"]);
  $status = htmlspecialchars ($data["status"]);

  $query = "INSERT INTO resepsionis VALUES (NULL, '$tanggal', '$nama_lengkap', '$roles', '$no_hp', '$status')";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
function apusRepse($id){
  global $conn;

  mysqli_query($conn, "DELETE FROM resepsionis WHERE id_repse = '$id'");
  return mysqli_affected_rows($conn);
}
function editRepsesionis($data){
  global $conn;

  $id = htmlspecialchars ($data["id_repse"]);
  $tanggal = htmlspecialchars ($data["tanggal"]);
  $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
  $roles = htmlspecialchars ($data["roles"]);
  $no_hp = htmlspecialchars ($data["no_hp"]);
  $status = htmlspecialchars ($data["status"]);

  $query = "UPDATE resepsionis SET
  tanggal = '$tanggal',
  nama_lengkap = '$nama_lengkap',
  roles = '$roles',
  no_hp = '$no_hp',
  status = '$status' WHERE id_repse = '$id'";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}

//GTK

function tambahGtk($data){
  global $conn;

  $tanggal = htmlspecialchars ($data["tanggal"]);
  $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
  $roles = htmlspecialchars ($data["roles"]);
  $tujuan = htmlspecialchars ($data["tujuan"]);
  $status = htmlspecialchars ($data["status"]);

  $query = "INSERT INTO gtk VALUES(NULL, '$tanggal', '$nama_lengkap','$roles', '$tujuan', '$status')";
  
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}
function apusGtk($id){
  global $conn;

  mysqli_query($conn, "DELETE FROM gtk WHERE id_gtk = '$id'");
  return mysqli_affected_rows($conn);
}
function editGtk($data){
  global $conn;

  $id = htmlspecialchars ($data["id_gtk"]);
  $tanggal = htmlspecialchars ($data["tanggal"]);
  $nama_lengkap = htmlspecialchars ($data["nama_lengkap"]);
  $roles = htmlspecialchars ($data["roles"]);
  $tujuan = htmlspecialchars ($data["tujuan"]);
  $status = htmlspecialchars ($data["status"]);

  $query = "UPDATE gtk SET
  tanggal = '$tanggal',
  nama_lengkap = '$nama_lengkap',
  roles = '$roles',
  tujuan = '$tujuan',
  status = '$status' WHERE id_gtk = '$id'";

  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
}



?>
