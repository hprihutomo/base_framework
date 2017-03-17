<?php
  if (isset($_POST['simpan'])) {
    $query = "INSERT INTO mstable (code_tables,status_tables) VALUES (?,0)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(1,$_POST['table']);
    $action = $stmt->execute();

    if ($action) {
      $pesan = "<div class='alert alert-success'>Data Telah Di Input</div>";
    }else {
        $pesan = "<div class='alert alert-danger'>Data Gagal Di Input</div>";
    }
  }
 ?>
<div class="panel panel-primary">
  <div class="panel-body">
    <form class="" method="post">
    <?php include 'form.meja.php'; ?>
    <div class="pull-left">
      <a href="?p=MEJA" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-arrow-left"></i> KEMBALI</a>
    </div>
    <div class="pull-right">
      <button type="reset" name="" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-refresh"></i> RESET</button>
      <button type="submit" name="simpan" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-save"></i> SIMPAN</button>
    </div>
    </form>
  </div>
</div>
