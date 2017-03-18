 var x = 1;
 var IDBANK=parseInt($('#IDBANK').val());
function penjaminan(){
    $.ajax({
        url: "module/widget/penjaminan.php?id="+IDBANK,
        cache: false,
        success: function(msg){
            $("#penjaminan").html(msg);
        }
    });
    var waktu = setTimeout("penjaminan()",6000);
}

$(document).ready(function(){
    penjaminan();
    // $("#list").click(function(){
    //     //ajax untuk menampilkan pesan yang belum terbaca
    //     $.ajax({
    //         url: "provider/list-permohonan.php",
    //         cache: false,
    //         success: function(msg){
    //             $("#list-info").html(msg);
    //             // $("#loading").hide();
    //         }
    //     });

    // });
    
});


