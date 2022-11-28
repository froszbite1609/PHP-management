<?php include "assets/template/header.php"; ?>
  <section class="register-form">
    <div class="container flex">
      <h1>สมัครสมาชิก</h1>
      <form method="post" action="engine/register_system.php">
        <?php include "engine/errors.php"; ?>
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
        <label for="name_reg" class="label-name" id="name">ชื่อผู้ใช้</label>
        <input type="text" class="form-input" id="name-reg" name="name_reg" required>

        <!-- Email -->
        <label for="email_reg" class="label-name" id="email">อีเมลล์</label>
        <input type="email" class="form-input" id="email-reg" name="email_reg" required>
        
        <!-- Password -->
        <label for="pass_reg" class="label-name" id="password">รหัสผ่าน</label>
        <input type="password" class="form-input" id="pass-reg" name="pass_reg" required>

        <input type="submit" class="submit-btn" name="submit_reg" value="ยืนยัน">
      </form>
    </div>
  </section>
<?php include "assets/template/footer.php"; ?>