var x = 1;
var IDBANK=parseInt($('#IDBANK').val());
function permohonan(){
    $.ajax({
        url: "module/widget/permohonan.php?id="+IDBANK,
        cache: false,
        success: function(msg){
            $("#permohonan").html(msg);
        }
    });
    var waktu = setTimeout("permohonan()",6000);
}

$(document).ready(function(){
    permohonan();
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


