<div class="panel panel-primary">
  <div class="panel-heading">
    DAFTAR PENYAKIT GANGGUAN JIWA
  </div>
  <div class="panel-body">

    <table class="table table-bordered table-condensed">
        <thead>
          <th width="50">NO</th>
          <th>NAMA PENYAKIT</th>
          <th width="50">DETAIL</th>
        </thead>
        <?php
          $q = mysql_query("SELECT * FROM penyakit");
           while ($rl = mysql_fetch_array($q)) {
             $penyakit = $rl['nm_penyakit'];
	           $idp      = $rl['kd_penyakit'];
         ?>
        <tr>
          <td><?=$idp?></td>
          <td><?=$penyakit?></td>
          <td>
            <a onclick="window.open('data/penyakit.php?idp=<?=$idp?>','','width=600px,height=400px')" class="btn btn-xs btn-primary">DETAIL</a>
          </td>
        </tr>
        <?php  } ?>
    </table>
  </div>
</div>
