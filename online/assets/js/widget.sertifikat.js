var x = 1;
var IDBANK=parseInt($('#IDBANK').val());
function sertifikat(){
    $.ajax({
        url: "module/widget/sertifikat.php?id="+IDBANK,
        cache: false,
        success: function(msg){
            $("#sertifikat").html(msg);
        }
    });
    var waktu = setTimeout("sertifikat()",6000);
}

$(document).ready(function(){
    sertifikat();
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


