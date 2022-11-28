<?php include "assets/template/header.php"; ?>
  <section class="full-parallax">
    <div class="container flex">
      <!-- Alert message -->
      <?php if (isset($_SESSION["success_1"])) { ?>
        <div class="success">
          <h3>
            <?php
              echo $_SESSION["success_1"];
              unset($_SESSION["success_1"]);
            ?>
          </h3>
        </div>
      <?php } else if (isset($_SESSION["success_2"])) { ?>
        <div class="success">
          <h3>
            <?php
              echo $_SESSION["success_2"];
              unset($_SESSION["success_2"]);
            ?>
          </h3>
        </div>
      <?php } ?>

      <h1>งานครุภัณฑ์พัสดุ</h1>
    </div>
  </section>
<?php include "assets/template/footer.php"; ?>