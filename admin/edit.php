<?php
  include "../engine/config.php";
  include "assets/template/header.php";

  $sql = "SELECT * FROM mtn WHERE mtn.id_mtn = '".$_GET["id_mtn"]."'";
  $query = mysqli_query($conn, $sql);
  $result = mysqli_fetch_array($query);
?>
  <section class="edit-form">
    <div class="container flex">
      <h1>แก้ไขข้อมูล</h1>
      <form method="post" action="../engine/edit_system.php?id_mtn=<?php echo $result["id_mtn"]; ?>" enctype="multipart/form-data">
        <!-- Name -->
        <label for="name_add" class="label-name" id="name">ชื่ออุปกรณ์</label>
        <input type="text" class="form-input" id="name-add" name="name_edit" value="<?php echo $result['name_mtn']; ?>" required>

        <!-- Picture -->
        <label for="pic_add" class="label-name" id="pic">รูปภาพ</label>
        <input type="file" class="form-input" id="pic-add" name="pic_edit" required>
        
        <!-- Type -->
        <label for="type_add" class="label-name" id="type">ประเภท</label>
        <select class="form-input" id="type-add" name="type_edit" required>
            <option value="<?php echo $result['type_mtn'] ?>"><?php echo $result["type_mtn"] ?></option>
            <option value="เมาส์">เมาส์</option>
            <option value="คีย์บอร์ด">คีย์บอร์ด</option>
            <option value="หน้าจอ">หน้าจอ</option>
            <option value="พีซี">พีซี</option>
        </select>

        <!-- Detail -->
        <label for="detail_add" class="label-name" id="detail">รายละเอียด</label>
        <textarea class="form-input" id="detail-add" name="detail_edit">
          <?php echo $result["detail_mtn"]; ?>
        </textarea>

        <input type="submit" class="submit-btn" name="submit_edit" value="ยืนยัน">
      </form>
    </div>
  </section>
<?php include 'assets/template/footer.php'; ?>