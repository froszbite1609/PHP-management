<?php
  session_start();
  include "config.php";

  $errors = array();

  if (isset($_POST["submit_reg"])) {
    $level = mysqli_real_escape_string($conn, 'member');
    $username = mysqli_real_escape_string($conn, $_POST["name_reg"]);
    $email = mysqli_real_escape_string($conn, $_POST["email_reg"]);
    $pass = mysqli_real_escape_string($conn, md5($_POST["pass_reg"]));

    if (empty($username)) {
      array_push($errors, "กรุณากรอกชื่อผู้ใช้");
    }

    if (empty($email)) {
      array_push($errors, "กรุณากรอกอีเมลล์");
    }

    if (empty($pass)) {
      array_push($errors, "กรุณากรอกรหัสผ่าน");
    }

    // if (strlen($pass) < 8) {
    //   array_push($errors, "ต้องกรอกรหัสผ่านอย่างน้อย  8 ตัวอักษรขึ้นไป");
    // }

    // if (strlen($pass) > 15) {
    //   array_push($errors, "รหัสผ่านต้องไม่เกิน 15 ตัวอักษร");
    // }

    $user_check_query = "SELECT * FROM user WHERE name_user='$username' OR email_user='$email'";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
      if ($result["name_user"] === $username) {
        array_push($errors, "ชื่อนี้มีผู้ใช้แล้ว");
      }
      
      if ($result["email_user"] === $email) {
        array_push($errors, "อีเมลล์นี้มีผู้ใช้แล้ว");
      }
    }

    if (count($errors) == 0) {
      $sql = "INSERT INTO user (level_user, name_user, email_user, pass_user) VALUES ('$level', '$username', '$email', '$pass')";
      mysqli_query($conn, $sql);
      
      $_SESSION["success_1"] = "สมัครสมาชิกเสร็จสิ้น";
      header("Location: ../index.php");
    } else {
      header("Location: ../register.php");
    }
  }