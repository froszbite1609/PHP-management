<?php
  include "config.php";

  $id = $_GET["id_mtn"];

  $sql = "DELETE FROM mtn WHERE id_mtn = '$id'";
  $query = mysqli_query($conn, $sql);

  echo "<br>ลบข้อมูลสำเร็จ";
  header('Location: ../equipment.php');

  mysqli_close($conn);