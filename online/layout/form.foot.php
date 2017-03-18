    <?php 
    if(isset($savelog)){
      $query = "INSERT INTO LOG (NAMAUSER,NAMALOG) VALUES (:NAMA,:NAMALOG)";
      $stmt = $db->prepare($query);
      $stmt->bindParam(':NAMA',$NAMA);
      $stmt->bindParam('NAMALOG',$LOG);
      $stmt->execute();
    }


     ?>

    <script src="../../assets/jquery/jquery.js"></script>
    
    <?php if ($value['NAMAPRODUK'] == 'PRODUKTIF') { ?>
    <script src="../../library/produktif.js"></script>
    <?php }elseif ($value['NAMAPRODUK'] == 'MULTIGUNA') {?>
    <script src="../../library/multiguna.js"></script>
    <?php }elseif ($value['NAMAPRODUK'] == 'KONSTRUKSI') {?>
    <script src="../../library/konstruksi.js"></script>
    <?php } ?>
    <script>
        $(document).ready(function(){
            //$('#nilai_ijp_diterima').maskMoney();

            $('#selisih').keyup(function(){
            //var ijp_terima = $('#nilai_ijp_diterima').maskMoney('unmasked')[0];
            //$('#n_ijp_diterima').val(ijp_terima);

            var ijp=parseFloat($('#n_ijp').val());
            var ijpTerima=parseFloat($('#nilai_ijp_diterima').val());

            var n_selisih=ijpTerima-ijp;
            $('#selisih').val(n_selisih);
              });

            $('#p_ijpreass').keyup(function(){
              var masa=parseInt($('#masa').val());
              if(masa <= 12){
                  $('#p_ijpreass').val(0.215); //1
               } else if(masa <= 24 ){
                   $('#p_ijpreass').val(0.336); //2
               }else if(masa <= 36 ){
                   $('#p_ijpreass').val(0.517); //3
               }else if(masa <= 48 ){
                   $('#p_ijpreass').val(0.666); //4
               }else if(masa <= 60 ){
                   $('#p_ijpreass').val(0.787); //5
               }else if(masa <= 72 ){
                   $('#p_ijpreass').val(0.902); //6
               }else if(masa <= 84 ){
                   $('#p_ijpreass').val(1.144); //7
               }else if(masa <= 96 ){
                   $('#p_ijpreass').val(1.364); //8
               }else if(masa <= 108 ){
                   $('#p_ijpreass').val(1.546); //9
               }else if(masa <= 120 ){
                   $('#p_ijpreass').val(1.755); //10
               }
              var JiwaReas=parseFloat($('#p_ijpreass').val());
              var pla =parseFloat($('#pla').val());
              var ijpReas = pla*JiwaReas/100;
               $('#ijpreass').val(ijpReas);

            });

          });
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../assets/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../../assets/raphael/raphael.min.js"></script>
    <script src="../../assets/morrisjs/morris.min.js"></script>
    <!--<script src="assets/data/morris-data.js"></script>-->

    <!-- Custom Theme JavaScript -->
    <script src="../../assets/js/sb-admin-2.js"></script>
    <script src="../../assets/js/popup.js"></script>
    

    <script type="text/javascript">
    function ambil(a){
          window.opener.document.forms.idnasabah.value=document.getElementById("idnasabah"+a+"").innerHTML;
          window.opener.document.forms.noidentitas.value=document.getElementById("noidentitas"+a+"").innerHTML;
          window.opener.document.forms.alamat.value=document.getElementById("alamat"+a+"").innerHTML;
          window.opener.document.forms.jnsidentitas.value=document.getElementById("jnsidentitas"+a+"").innerHTML;
          window.opener.document.forms.nama_nasabah.value=document.getElementById("nama_nasabah"+a+"").innerHTML;
          window.opener.document.forms.instansi.value=document.getElementById("instansi"+a+"").innerHTML;
          window.opener.document.forms.pekerjaan.value=document.getElementById("pekerjaan"+a+"").innerHTML;
          
          window.close();
          }

    function setreass(b){

          window.opener.document.forms.idr.value=document.getElementById("idr"+b+"").innerHTML;
          window.opener.document.forms.namareass.value=document.getElementById("namareass"+b+"").innerHTML;
          window.opener.document.forms.produktif.value=document.getElementById("produktif"+b+"").innerHTML;
          window.opener.document.forms.multiguna.value=document.getElementById("multiguna"+b+"").innerHTML;
          window.opener.document.forms.konstruksi.value=document.getElementById("konstruksi"+b+"").innerHTML;
          
          window.close();
          }
    </script>
    
    <script type="text/javascript">
        function tutup(){
          window.opener.location.reload();
          window.close();
        }
    </script>


</body>

</html>