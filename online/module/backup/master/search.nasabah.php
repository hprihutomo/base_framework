<?php

    require_once "../../layout/form.head.php";
    ?>
<div class="panel panel-primary">
<div class="panel-heading">PENCARIAN DATA</div>
<div class="panel-body">
    <form method="POST">
        Cari Nasabah: <input type="text" name="txtsearch"  autocomplete="off">  / Berdasarkan : 
       <select name="pilih">
             <option value="NAMADEPAN">Nama Nasabah</option>
            <option value="NOIDENTITAS">No Identitas</option>
        </select>
    <input type="submit" value="Search" name="submit"/>
    </form>
    <br>
    <table class='table table-bordered table-condensed mytable' >
    <thead>
        <th>PILIH</th>
        <th>NO</th>
        <th>NAMA</th>
        <th>IDENTITAS</th>
        <th>NO IDENTITAS</th>
        <th>ALAMAT</th>
        <th>INSTANSI</th>
        <th>STATUS</th>
    </thead>
    <tbody>
    <?php
      
       if(isset($_POST['submit'])){
            $search = $_POST['txtsearch'];
            $choice = $_POST['pilih'];
            $prdk = $_GET['prdk'];
            try{
                $query = "SELECT * FROM MSNASABAH WHERE IDPRODUK = ".$prdk." AND ".$choice." LIKE '".$search."' ";
                $cari=$db->prepare($query);
                // $cari->BindParam(":NAMADEPAN",$search);
                // $cari->BindParam(":PILIH",$_POST['pilih']);
                $cari->execute();
                $no=1;
                if($cari->rowCount()<0){
                    
                    echo "<i> Hasil pencarian dengan kata <b>\"".$_POST['txtsearch']."\"</b></i>, Jika Tidak Di Temukan <a href='javascript:void(0)' onclick=\"Popup('../../module/master/create.nasabah.php?prdk=".$_GET['prdk']."', '', '800','700')\"> Klik disini</a> untuk tambah data <br>";
                    while($t=$cari->fetch()){
                    ?>
                    
                
                <tr>
                    <td><a href="#" onClick="ambil('<?php echo $t['IDNASABAH']; ?>')"   class="btn btn-xs btn-primary">PILIH</a></td>
                    <td id="idnasabah<?php echo $t['IDNASABAH']; ?>"><?php echo $t['IDNASABAH'] ?></td>
                    <td id="nama_nasabah<?php echo $t['IDNASABAH']; ?>"><?php echo $t['NAMADEPAN']." ".$t['NAMABELAKANG'] ?></td>
                    <td id="jnsidentitas<?php echo $t['IDNASABAH']; ?>"><?php echo $t['JNSIDENTITAS'] ?></td>
                    <td id="noidentitas<?php echo $t['IDNASABAH']; ?>"><?php echo $t['NOIDENTITAS']?></td>
                    <td id="alamat<?php echo $t['IDNASABAH']; ?>"><?php echo $t['ALAMATNASABAH']?></td>
                    <td id="instansi<?php echo $t['IDNASABAH']; ?>"><?php echo $t['INSTANSI']?></td>
                    <td id="pekerjaan<?php echo $t['IDNASABAH']; ?>"><?php echo $t['PEKERJAAN']?></td>
                </tr>

                <?php
                    }
                }else{
                    echo $cari->rowCount();
                    echo "<i> Tidak ada hasil untuk pencarian kata <b>\"".$_POST['txtsearch']."\" &nbsp;  </i></b><a href='javascript:void(0)' onclick=\"Popup('../../module/master/create.nasabah.php?prdk=".$_GET['prdk']."', '', '800','700')\"> Klik disini</a> untuk tambah data";
                }   
            }catch(PDOException $e){
                echo $e->getMessage();
            }
    }

    ?>
        </tbody>
    </table>
</div>
</div>
 
<?php
    require_once "../../layout/form.foot.php";
?>
