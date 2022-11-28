<?php
  include "config.php";

  $id = $_GET["id_mtn"];
  $name = mysqli_real_escape_string($conn, $_POST["name_edit"]);
  $pic = mysqli_real_escape_string($conn, $_FILES["pic_edit"]["name"]);
  $type = mysqli_real_escape_string($conn, $_POST["type_edit"]);
  $detail = mysqli_real_escape_string($conn, $_POST["detail_edit"]);

  if ($_FILES["pic_mtn"]["name"] != "") {
    if (move_uploaded_file($_FILES["pic_mtn"]["tmp_name"], "../admin/assets/img/mtn".$_FILES["pic_mtn"]["name"])) {
      $sql = "UPDATE mtn SET name_mtn='$name', pic_mtn='$pic', type_mtn='$type', detail_mtn='$detail' WHERE id_mtn='$id'";

      $query = mysqli_query($conn, $sql);

      header("Location: ../admin/manage.php");
      mysqli_close($conn);
    } else {
      echo "<br>ไม่สามารถบันทึกข้อมูลได้";
    }
  } else {
    $sql = "UPDATE mtn SET name_mtn='$name', type_mtn='$type', detail_mtn='$detail' WHERE id_mtn='$id'";

    $query = mysqli_query($conn, $sql);
    
    echo "<br>บันทึกข้อมูลสำเร็จ";
    echo "<br>ไม่มีไฟล์รูปภาพ";

    header("Location: ../admin/manage.php");
    mysqli_close($conn);
  }