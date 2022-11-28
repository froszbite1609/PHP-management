<?php
  session_start();
  include "config.php";

  $errors = array();

  if (isset($_POST["submit_log"])) {
    $username = mysqli_real_escape_string($conn, $_POST["name_log"]);
    $pass = mysqli_real_escape_string($conn, md5($_POST["pass_log"]));

    if (empty($username)) {
      array_push($errors, "กรุณากรอกชื่อผู้ใช้");
    }

    if (empty($pass)) {
      array_push($errors, "กรุณากรอกรหัสผ่าน");
    }

    if (count($errors) == 0) {
      $query = "SELECT * FROM user WHERE name_user='$username' AND pass_user='$pass'";
      $result = mysqli_query($conn, $query);

      if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        
        $_SESSION["level"] = $row["level_user"];

        if ($_SESSION["level"] == "admin") {
          $_SESSION["username"] = $username;
          header("Location: ../admin/index.php");
        }

        if ($_SESSION["level"] == "member") {
          $_SESSION["username"] = $username;
          $_SESSION["success_2"] = "ยินดีต้อนรับเข้าสู่ระบบ";
          header("Location: ../index.php");
        }
      } else {
        array_push($errors, "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง");
        $_SESSION["errors"] = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("Location: ../login.php");
      }
    } else {
      array_push($errors, "กรุณากรอกชื่อผู้ใช้งานและรหัสผ่าน");
      $_SESSION["errors"] = "กรุณากรอกชื่อผู้ใช้งานและรหัสผ่าน";
      header("Location: ../login.php");
    }
  }