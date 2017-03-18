<?php 
  require_once "../../layout/form.head.php";
    $query = "SELECT * FROM DATA_PERMOHONAN WHERE IDPERMOHONAN = '".$_GET['id']."'";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $data = $stmt->fetch();
?>
<table width="100%">
  <tr>
    <td colspan="12" align="center" valign="top"><input class="noPrint" type="button" value="CETAK"onclick="window.print()" /></td>
  </tr>
  <tr>
    <td colspan="12" align="center" valign="top"><strong>KOMITE PENJAMINAN</strong></td>
  </tr>
  <tr>

    <td colspan="12" align="center" valign="top"><strong>Nomor: <?php echo $data['NOAGENDA']; ?> /K.P/<?php echo $data['TGLPERMOHONAN']; ?>/<?php echo $data['TGLPERMOHONAN']; ?></strong></td>
  </tr>
  <tr>
    <td width="1%" align="left" valign="top">&nbsp;</td>
    <td width="1%" align="left" valign="top">&nbsp;</td>
    <td width="1%" align="left" valign="top">&nbsp;</td>
    <td width="18%" align="left" valign="top">&nbsp;</td>
    <td width="1%" align="left" valign="top">&nbsp;</td>
    <td width="4%" align="left" valign="top">&nbsp;</td>
    <td width="20%" align="left" valign="top">&nbsp;</td>
    <td width="20%" align="left" valign="top">&nbsp;</td>
    <td width="4%" align="left" valign="top">&nbsp;</td>
    <td width="1%" align="left" valign="top">&nbsp;</td>
    <td width="10%" align="left" valign="top">&nbsp;</td>
    <td width="19%" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="left" valign="top">Tanggal Pertemuan</td>
    <td align="left" valign="top"> :</td>
    <td colspan="2" align="left" valign="top"><?php echo $data['TGLPERMOHONAN']; ?></td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="4" align="left" valign="top">Agenda SPS</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Nomor </td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?php echo $data['NOAGENDA']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Tanggal</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><?php echo $data['TGLAGENDA']; ?></td>
  </tr>
  <tr>
    <td colspan="12" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">I</td>
    <td colspan="11" align="left" valign="top"><strong>Nasabah</strong></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">1</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Perihal</td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="7" align="left" valign="top">Penjaminan Kredit <?php echo $data['NAMAPRODUK']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">2</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Nama Terjamin</td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="7" align="left" valign="top">
        <?php //echo $data['NOAGENDA']; ?>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">3</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Alamat</td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="7" align="left" valign="top">
        <?php //echo $data['NOAGENDA']; ?>  
    </td>
  </tr>
  
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">4</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Penerima Jaminan</td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="7" align="left" valign="top"><?php  echo $data['NOAGENDA']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">5</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Surat pengajuan bank</td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="7" align="left" valign="top"><?php echo $data['NOMORPERMOHONAN']; ?> ,Tanggal <?php echo $data['TGLPERMOHONAN']; ?></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">II</td>
    <td colspan="11" align="left" valign="top"><strong>RINGKASAN</strong></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">1. </td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">Perihal</td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="7" align="left" valign="top">Permohonan kredit <?php echo $data['NAMAPRODUK']; ?>
    </td>
  </tr>
  <tr>
    <td colspan="12" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">III</td>
    <td colspan="3" align="left" valign="top"><strong>PEMBAHASAN</strong></td>
    <td align="left" valign="top">1. </td>
    <td colspan="6" rowspan="2" align="justify" valign="top">Usulan Penjaminan berdasarkan surat nomor <?php echo $data['NOMORPERMOHONAN']; ?>
    tanggal <?php echo $data['TGLPERMOHONAN']; ?> perihal Permohonan Penjaminan Kredit dari <?php echo $data['KODE']." ".$data['JNSBANK']." ".$data['KANTOR'];?>
    a.n     <?php
            if($dat->code > '1'){
              echo $dat->code; echo " DEBITUR "; echo " ($data1->namaNasabah) "; echo "Terlampir ";
            }else{
              echo $data1->namaNasabah;
            }
    ?> yang digunakan untuk keperluan kredit produktif</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">2. </td>
    <td colspan="6" rowspan="2" align="left" valign="top">Perjanjian Kredit
      <?php
            if($dat->code > '1'){
              echo $dat->code; echo " DEBITUR "; echo " ($data1->namaNasabah) "; echo "Terlampir ";
            }else{
              echo $data1->NomorAkad ; echo ", tanggal ";echo date_idn($data1->tglAkad,"j F Y");
            }
    ?>
    </td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top"><br /></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">3. </td>
    <td colspan="6" rowspan="2" align="left" valign="top">Bahwa seluruh persyaratan penjaminan sesuai dengan surat permohonan tersebut (lampiran daftar cek list) dan disimpan bank pelaksana.</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">4. </td>
    <td colspan="6" rowspan="2" align="left" valign="top">Fasilitas Kredit tersebut dipergunakan untuk

  </td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">5. </td>
    <td colspan="6" rowspan="2" align="left" valign="top">Jangka waktu penjaminan selama
   </td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><strong>IV</strong></td>
    <td colspan="3" align="left" valign="top"><strong>KESEPAKATAN</strong></td>
    <td align="left" valign="top">&nbsp;</td>
    <td colspan="6" align="left" valign="top"><p>Pengajuan Penjaminan sertifikat penjaminan a.n
    oleh <?php echo $data1->kodeBank." ".$data1->jenisBank." ",$data1->kantorBank;?> dapat disetujui dengan ketentuan sebagai berikut:</p></td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
     
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">a.</td>
    <td align="left" valign="top">Plafond Kredit</td>
    <td align="left" valign="top">:
       
</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">b.</td>
    <td align="left" valign="top">Penjaminan</td>
    <td align="left" valign="top">:
    
   </td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">c.</td>
    <td align="left" valign="top">Jenis Skim Kredit</td>
    <td align="left" valign="top">:
        
    </td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <!--<tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">d.</td>
    <td align="left" valign="top">Bunga</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>-->
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">d.</td>
    <td align="left" valign="top">Jangka Waktu</td>
    <td align="left" valign="top">:
           Bulan
</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">e.</td>
    <td align="left" valign="top">Imbal Jasa  Penjaminan</td>
    <td align="left" valign="top">:
       
    </td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="12" align="left" valign="top"><hr /></td>
  </tr>
  <tr>
    <td colspan="12" align="left" valign="top"><table width="100%" border="0">
      <tbody>
        <tr align="center">
          <td width="20%">Direktur Utama</td>
          <td width="20%">Direktur Operasional</td>
          <td width="20%">Direktur Umum</td>
          <td width="20%">Ka.Bag Penjaminan</td>
          <td width="20%">Staff</td>
          </tr>
        <tr>
          <td height="46">&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr align="center">
          <td><strong>H. AGUSSHOHIR, AS</strong></td>
          <td><strong>AGUS WAHYUDIN, SE</strong></td>
          <td><strong>H. ABDUL KADIR</strong></td>
          <td><strong>FAKHNURDIN</strong></td>
              
          <td><strong><?php echo strtoupper($datak->namaUser)?></strong></td>
          </tr>
      </tbody>
    </table></td>
  </tr>
</table>
<?php
require_once "../../layout/form.foot.php";
?>