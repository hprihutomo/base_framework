<table class="table table-bordered table-condensed">
  <tr>
    <td>KODE</td>
    <td>
      <input type="text" name="kode" value="<?php echo $data['kd_penyakit'] ?>">
    </td>
  </tr>
  <tr>
    <td>NAMA</td>
    <td>
      <input type="text" name="nama" value="<?php echo $data['nm_penyakit'] ?>" size="100">
    </td>
  </tr>
  <tr>
    <td>PENYEBAB</td>
    <td>
      <textarea name="penyebab" rows="3" cols="101"><?php echo $data['penyebab'] ?></textarea>
    </td>
  </tr>
  <tr>
    <td>SOLUSI</td>
    <td>
      <textarea name="solusi" rows="3" cols="101"><?php echo $data['solusi'] ?></textarea>
    </td>
  </tr>
</table>
