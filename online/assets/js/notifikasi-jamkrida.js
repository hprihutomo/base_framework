var x = 1;

function cek2(){
    $.ajax({
        url: "provider/ring-permohonan.php",
        cache: false,
        success: function(msg){
            $("#ring").html(msg);
        }
    });
    var waktu = setTimeout("cek2()",6000);
}

$(document).ready(function(){
    cek2();
    $("#list").click(function(){
        //ajax untuk menampilkan pesan yang belum terbaca
        $.ajax({
            url: "provider/list-permohonan.php",
            cache: false,
            success: function(msg){
                $("#list-info").html(msg);
                // $("#loading").hide();
            }
        });

    });
    
});


