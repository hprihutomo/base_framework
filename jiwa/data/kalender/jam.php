    <script type="text/javascript">  
    // 1 detik = 1000  
    window.setTimeout("waktu()",1000);    
    function waktu() {     
        var tanggal = new Date();    
        setTimeout("waktu()",1000);    
       document.getElementById("output").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();  
   }  
   </script>  
    
   <body bgcolor="white" text="black" onload="waktu()">  
   <table align=center><tr><td>  
   <div id="output">  
   </div></td></tr>  
   </table>  