<?php include "assets/template/header.php"; ?>
  <section class="full-parallax">
    <div class="container">
      <!-- Alert message -->
      <?php include "../engine/errors.php" ?>
      <?php if (isset($_SESSION["success"])) : ?>
        <div class="success">
          <h3>
            <?php
              echo $_SESSION["success"];
              unset($_SESSION["success"]);
            ?>
          </h3>
        </div>
      <?php endif ?>

      <h1>งานครุภัณฑ์พัสดุ</h1>
    </div>
  </section>
<?php include "assets/template/footer.php"; ?>