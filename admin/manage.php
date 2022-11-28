<?php
  include "../engine/config.php";

  $sql = "SELECT * FROM mtn";
  $query = mysqli_query($conn, $sql) or die ("Error querry ['.$sql.']");
?>

<?php include "assets/template/header.php"; ?>
  <section class="table">
    <div class="container">
      <h1>จัดการข้อมูลทั้งหมด</h1>
      <table>
        <thead>
          <tr>
            <th>NO.</th>
            <th>ชื่อ</th>
            <th>รูปภาพ</th>
            <th>ประเภท</th>
            <th>รายละเอียด</th>
            <th>แก้ไข / ลบ</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; while ($result = mysqli_fetch_array($query)) { ?>
          <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $result["name_mtn"]; ?></td>
            <td><img width="200px" height="auto" src="assets/img/mtn/<?php echo $result["pic_mtn"]; ?>"></td>
            <td><?php echo $result["type_mtn"]; ?></td>
            <td><?php echo $result["detail_mtn"] ?></td>
            <td>
              <a class="edit" href="edit.php?id_mtn=<?php echo $result["id_mtn"]; ?>">แก้ไข</a>
              <a class="delete" href="JavaScript:if(confirm('ต้องการลบอุปกรณ์นี้หรือไม่?') == true) { window.location='../engine/delete_system.php?id_mtn=<?php echo $result["id_mtn"]; ?>' }">ลบ</a>
            </td>
          </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
    </div>
  </section>
<?php include "assets/template/footer.php"; ?>