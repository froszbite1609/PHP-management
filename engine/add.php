<?php
  include "config.php";

  if (isset($_POST["submit_add"])) {
    if ($_FILES["pic_add"]["name"] != "") {
      if (move_uploaded_file($_FILES["pic_add"]["tmp_name"], "../admin/assets/img/mtn/".$_FILES["pic_add"]["name"])) {
        $name = mysqli_real_escape_string($conn, $_POST["name_add"]);
        $pic = mysqli_real_escape_string($conn, $_FILES["pic_add"]["name"]);
        $type = mysqli_real_escape_string($conn, $_POST["type_add"]);
        $detail = mysqli_real_escape_string($conn, $_POST["detail_add"]);

        $strSQL = "INSERT INTO mtn (name_mtn, pic_mtn, type_mtn, detail_mtn) VALUES ('$name', '$pic', '$type', '$detail')";

        $query = mysqli_query($conn, $strSQL);
        header("Location: ../admin/manage.php");
      } else {
        header("Location: ../admin/create.php");
      }
    }
  }