<div class="panel panel-primary">
  <div class="panel-heading">
    HASIL ANALISA
  </div>
  <div class="panel-body">

    <table class="table table-bordered">
      <tr>
        <td>Nama</td>
        <td>Kelamin</td>
        <td>Alamat</td>
        <td>Pekerjaan</td>
      </tr>
      <?php

      $slb = "SELECT * FROM analisa_hasil ORDER BY id DESC limit 1 ";
      $qrb = mysql_query($slb, $koneksi)   or die ("SQL Error".mysql_error());
      $dtb = mysql_fetch_array($qrb);

      ?>
      <tr>
        <td><?php echo $dtb['nama'] ?></td><input type="hidden" name="nama" value="<?php echo $dtb['nama']; ?>">
        <td><?php if($dtb['kelamin']=='P'){ echo "PRIA"; } else {echo "WANITA"; }?></td><input type="hidden" name="kelamin" value="<?php echo $dtb['kelamin']; ?>">
        <td><?php echo $dtb['alamat'] ?></td><input type="hidden" name="alamat" value="<?php echo $dtb['alamat']; ?>">
        <td><?php echo $dtb['pekerjaan'] ?></td><input type="hidden" name="pekerjaan" value="<?php echo $dtb['pekerjaan']; ?>">
      </tr>
    </table>
    <table class="table table-bordered">
        <tr>
          <td>Pasien Mengalami</td>
          <td>
            <b>GANGGUAN</b>
              <?php
              $set = str_replace(",","','",$dtb['kd_penyakit']);
              $sqla = "SELECT * FROM penyakit where kd_penyakit in ('".$set."') ";
              $qrya = mysql_query($sqla, $koneksi)   or die ("SQL Error".mysql_error());
              while($data2 = mysql_fetch_array($qrya)){
                echo "<li>".$data2['nm_penyakit']." | ".$data2['kd_penyakit']."</li>";
                }      ?>

                <br>
                <b>PENYEBAB</b><br>
                <?php
                $py = "SELECT * FROM penyakit where kd_penyakit in ('".$set."')";
                $qpy = mysql_query($py, $koneksi)   or die ("SQL Error".mysql_error());
                while($dtpy = mysql_fetch_array($qpy)){
                 echo  $dtpy['penyebab']."<br>";
                  }
                ?>

                <br>
                <b>SOLUSI</b><br>
                <?php
                $py = "SELECT * FROM penyakit where kd_penyakit in ('".$set."') ";
                $qpy = mysql_query($py, $koneksi)   or die ("SQL Error".mysql_error());
                while($dtpy = mysql_fetch_array($qpy)){
                 echo  $dtpy['solusi']."<br>";
                  }
                ?>

         </td>
          <td>
            <b>GEJALA</b><br>
            <?php


            $sql1 = "SELECT * FROM v_penyakit_gejala where kd_penyakit in ('".$set."') ";
            $qry1 = mysql_query($sql1, $koneksi)   or die ("SQL Error".mysql_error());
            while($data1 = mysql_fetch_array($qry1)){
              echo "<li>".$data1['nm_gejala']."</li>";
              }

              $nama       = $_POST['nama'];
              $kelamin    = $_POST['kelamin'];
              $alamat     = $_POST['alamat'];
              $pekerjaan  = $_POST['pekerjaan'];
              $kd_penyakit = $_POST['kd_penyakit'];

                //  $pesan = "<div class='alert alert-success'>DATA TELAH DI INPUT</div>";
              // }
              if (isset($_POST['simpan'])) {
                  $sql ="INSERT INTO analisa_hasil (nama,kelamin,alamat,pekerjaan,kd_penyakit) VALUES ('$nama','$kelamin','$alamat','$pekerjaan','$kd_penyakit')";
                  mysql_query($sql, $koneksi)  or die ("SQL Error".mysql_error());

                header("location:?p=hasil_analisa");
               }

             ?>
          </td>
        </tr>
        <!-- <tr>
          <td colspan="3">

          </td>
        </tr> -->
    </table>
<a href="index.php" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> KEMBALI</a>
  </div>
</div>
