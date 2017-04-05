
  <div class="panel panel-primary">
    <div class="panel-body">
      <?php echo $pesan; ?>
      <form class=""  method="post">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
          <table class="table table-bordered table-condensed">
            <tr>
              <td>USERNAME</td>
              <td><input type="text" name="username" autocomplete="off"value=""></td>
            </tr>
            <tr>
              <td>PASSWORD</td>
              <td><input type="password" name="password" value=""></td>
            </tr>
            <tr>
              <td colspan="2">
                  <button type="reset" class="btn btn-sm btn-warning pull-left"><i class="glyphicon glyphicon-refresh"></i> RESET</button>
                  <button type="submit" name="login"class="btn btn-sm btn-primary pull-right"><i class="glyphicon glyphicon-lock"></i> LOG IN</button>
              </td>
            </tr>
          </table>
        </div>
        <div class="col-lg-3"></div>
      </form>
    </div>
  </div>
