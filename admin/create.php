<?php include "assets/template/header.php"; ?>
  <section class="create-form">
    <div class="container flex">
      <h1>เพิ่มอุปกรณ์</h1>
      <form method="post" action="../engine/add.php" enctype="multipart/form-data">
        <!-- Name -->
        <label for="name_add" class="label-name" id="name">ชื่ออุปกรณ์</label>
        <input type="text" class="form-input" id="name-add" name="name_add" required>

        <!-- Picture -->
        <label for="pic_add" class="label-name" id="pic">รูปภาพ</label>
        <input type="file" class="form-input" id="pic-add" name="pic_add" required>
        
        <!-- Type -->
        <label for="type_add" class="label-name" id="type">ประเภท</label>
        <select class="form-input" id="type-add" name="type_add" required>
            <option value="โปรดระบุ">โปรดระบุ</option>
            <option value="เมาส์">เมาส์</option>
            <option value="คีย์บอร์ด">คีย์บอร์ด</option>
            <option value="หน้าจอ">หน้าจอ</option>
            <option value="พีซี">พีซี</option>
        </select>

        <!-- Detail -->
        <label for="detail_add" class="label-name" id="detail">รายละเอียด</label>
        <textarea class="form-input" id="detail-add" name="detail_add"></textarea>

        <input type="submit" class="submit-btn" name="submit_add" value="ยืนยัน">
      </form>
    </div>
  </section>
<?php include "assets/template/footer.php"; ?>