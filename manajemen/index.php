<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>MANAJEMEN</title>
  </head>
  <body>
    <nav>
    <ul>
      <li>Master Data
        <ul>
          <li><a href="?p=Agama">Agama</a></li>
          <li><a href="?p=Jabatan">Jabatan</a></li>
          <li><a href="?p=Bagian">Bagian</a></li>
          <li><a href="?p=SubBagian">SubBagian</a></li>
          <li><a href="?p=Golongan">Golongan</a></li>
          <li><a href="?p=Pedidikan">Pendidikan</a></li>
        </ul>
      </li>
      <li>Manajemen Data
        <ul>
          <li><a href="?p=Pegawai">Pegawai</a></li>
          <li><a href="?p=SK">SK</a></li>
          <li><a href="?p=Pelatihan">Pelatihan</a></li>
          <li><a href="?p=Cuti">Cuti</a></li>
        </ul>
      </li>
      <li>Laporan</li>
    </ul>
    </nav>
    <div class="">
      <?php
        include 'content.php';
       ?>
    </div>
  </body>
</html>
