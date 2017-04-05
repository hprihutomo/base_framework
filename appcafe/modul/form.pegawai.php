<?php echo $pesan; ?>
<table class="table table-bordered">
  <tr>
    <td>NAMA PEGAWAI</td>
    <td><input type="text" name="waitress" value="<?php echo $data['namawaitress']?>"></td>
  </tr>
  <tr>
    <td>STATUS</td>
    <td>
      <select class="" name="onduty">
        <option value="1" <?php if ($data['onduty']==1) { echo "selected";  } ?>>MASUK</option>
        <option value="0" <?php if ($data['onduty']==0) { echo "selected";  } ?>>KELUAR</option>
      </select>
    </td>
  </tr>
</table>
