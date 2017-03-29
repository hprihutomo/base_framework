<?php
include 'golongan.action.php';
echo $pesan;
 ?>
<form class="" method="post">
<table>
  <tr>
    <td></td>
    <td><input type="text" name="id" value="<?php echo $data['idGolongan']?>" readonly="true" placeholder="Id Golongan"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="text" name="golongan" value="<?php echo $data['Golongan']?>" required="true" placeholder="Golongan"></td>
  </tr>
  <tr>
    <td colspan="2">
      <button type="submit" name="<?php echo $_GET['a'] ?>"><?php echo $_GET['a'] ?></button>
    </td>
  </tr>
</table>
</form>
