<?php
include 'pendidikan.action.php';
echo $pesan;
 ?>
<form class="" method="post">
<table>
  <tr>
    <td></td>
    <td><input type="text" name="id" value="<?php echo $data['idPendidikan']?>" readonly="true" placeholder="Id Pendidikan"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="text" name="pendidikan" value="<?php echo $data['Pendidikan']?>" required="true" placeholder="Pendidikan"></td>
  </tr>
  <tr>
    <td colspan="2">
      <button type="submit" name="<?php echo $_GET['a'] ?>"><?php echo $_GET['a'] ?></button>
    </td>
  </tr>
</table>
</form>
