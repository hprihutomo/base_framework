var x = 1;

function cek(){
    $.ajax({
        url: "provider/ring-pemberitahuan.php",
        cache: false,
        success: function(msg){
            $("#notifikasi").html(msg);
        }
    });
    var waktu = setTimeout("cek()",6000);
}

$(document).ready(function(){
    cek();
    $("#pesan").click(function(){
        //ajax untuk menampilkan pesan yang belum terbaca
        $.ajax({
            url: "provider/list-pemberitahuan.php",
            cache: false,
            success: function(msg){
                $("#konten-info").html(msg);
                // $("#loading").hide();
            }
        });

    });
    
});


