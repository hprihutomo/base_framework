<?php
include 'agama.action.php';
echo $pesan;
 ?>
<form class="" method="post">
<table>
  <tr>
    <td></td>
    <td><input type="text" name="id" value="<?php echo $data['idAgama']?>" readonly="true" placeholder="Id Agama"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="text" name="agama" value="<?php echo $data['Agama']?>" required="true" placeholder="Agama"></td>
  </tr>
  <tr>
    <td colspan="2">
      <button type="submit" name="<?php echo $_GET['a'] ?>"><?php echo $_GET['a'] ?></button>
    </td>
  </tr>
</table>
</form>
