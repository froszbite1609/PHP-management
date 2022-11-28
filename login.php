<?php include "assets/template/header.php"; ?>
  <section class="login-form">
    <div class="container flex">
      <h1>เข้าสู่ระบบ</h1>
      <form method="post" action="engine/login_system.php">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
        <!-- Name -->
        <label for="name_log" class="label-name" id="name">ชื่อผู้ใช้</label>
        <input type="text" class="form-input" id="name-log" name="name_log" required>
        
        <!-- Password -->
        <label for="pass_log" class="label-name" id="password">รหัสผ่าน</label>
        <input type="password" class="form-input" id="pass-log" name="pass_log" required>

        <input type="submit" class="submit-btn" name="submit_log" value="ยืนยัน">
      </form>
    </div>
  </section>
<?php include "assets/template/footer.php"; ?>