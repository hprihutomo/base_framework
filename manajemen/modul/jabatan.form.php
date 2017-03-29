<?php
include 'jabatan.action.php';
echo $pesan;
 ?>
<form class="" method="post">
<table>
  <tr>
    <td></td>
    <td><input type="text" name="id" value="<?php echo $data['idJabatan']?>" readonly="true" placeholder="Id Jabatan"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="text" name="bagian" value="<?php echo $data['Jabatan']?>" required="true" placeholder="Jabatan"></td>
  </tr>
  <tr>
    <td colspan="2">
      <button type="submit" name="<?php echo $_GET['a'] ?>"><?php echo $_GET['a'] ?></button>
    </td>
  </tr>
</table>
</form>
