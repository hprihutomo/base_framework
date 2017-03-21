<?php
switch ($_GET['p']) {
  case 'Agama':
    include 'modul/agama.data.php';
    break;
  case 'Form Agama':
    include 'modul/agama.form.php';
    break;

  default:
    echo "SELAMAT DATANG";
    break;
};
 ?>
