<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Meta tag -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSS  -->
    <link rel="stylesheet" href="assets/fonts/icons/remixicon.css">
    <link rel="stylesheet" href="assets/css/global.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/parallax.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/profile.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/table.css">

    <!-- Title -->
    <title>งานครุภัณฑ์พัสดุ</title>
  </head>
  <body class="break-words">
    <!-- Header -->
    <header class="header">
      <nav class="nav container" id="navbar-menu">
        <!-- Logo -->
        <a href="index.php" class="logo">
          งานครุภัณฑ์พัสดุ
        </a>
        
        <!-- Navigation Bar -->
        <section class="menu">
          <ul class="list">
            <li class="item">
              <a class="link" href="index.php">หน้าแรก</a>
            </li>
            <li class="item">
              <a class="link" href="profile.php">โปรไฟล์</a>
            </li>
          </ul>
        </section>

        <!-- User menu -->
        <section class="login-menu">
          <?php if (isset($_SESSION["username"])) { ?>
          <ul class="list">
            <li class="item">
              <a class="link" href="#"><?php echo $_SESSION["username"]; ?></a>
            </li>
            <li class="item">
              <a class="link" href="view.php">ดูตารางอุปกรณ์</a>
            </li>
            <li class="item">
              <a class="link" href="engine/logout.php">ออกจากระบบ</a>
            </li>
          </ul>
          <?php } else { ?>
          <ul class="list">
            <li class="item">
              <a class="link" href="login.php">เข้าสู่ระบบ</a>
            </li>
            <li class="item">
              <a class="link" href="register.php">สมัครสมาชิก</a>
            </li>
          </ul>
          <?php } ?>
        </section>

        <!-- Close button -->
        <section class="close" id="navbar-close">
          <i class="ri-close-line"></i>
        </section>
      
      </nav>

      <!-- Toggle button -->
      <section class="toggle" id="navbar-toggle">
          <i class="ri-apps-2-line"></i>
        </section>
    </header>