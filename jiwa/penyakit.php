<!DOCTYPE html>
	<html>
		<head>
			<meta http-equiv="X-UA-Compatible" content="IE=Edge">
			<title>POP UP</title>
			<style type="text/css">
				#overBox{width:100%;height:100%; top:0;background:rgba(0,0,0,0.5);position: fixed; left: 0;}
				.wrap{width:300px;margin:100px auto;}
				.head{background:rgba(100,200,100,0.9);}
			</style>
			<script type="text/javascript">
			window.onload = dokeyHot();
			var KeyHot = [];
			function dokeyHot () {
				if (window.event) {
					document.captureEvents(event.KEYPRESS);
				}
				document.onkeydown = function(e){
					var charCode = (e.which) ? e.which : e.keyCode;
					KeyHot[charCode] = true;
					if (KeyHot[27]) { // ESC Button 
						document.getElementById("box").innerHTML = "";
					}
				}
			}
			
			function ajaxP() {
				var dell = null;
				// for IE
					if (window.ActiveXObject)
							dell = new ActiveXObject("Microsoft.XMLHTTP");
					else
						//for Fire Fox And Other
						if (window.XMLHttpRequest)
							dell = new XMLHttpRequest();
				// cek 
				if (dell == null)
					document.write("Browser Tidak Support Ajax");
					return dell;
			}
				var fajax = ajaxP();
				function popUp (data) {
					var dawal = "<div id='overBox'>";
					var dakhir = "</div>";
					var box = document.getElementById("box");
					var url =data;
					fajax.open("POST",url,true);
					fajax.onreadystatechange = function(){
						if (fajax.readyState = 4 && fajax.status == 200) {
							box.innerHTML = dawal+fajax.responseText+dakhir;
						}
					}
					fajax.send(null);
					box.innerHTML = dawal+"Wait For Second.."+dakhir;
				}
			</script>
		</head>
		<body>
			<div id="box"></div>
			<a href="#" onClick="popUp('data.php');">KLIC DENAI</a>
			
		</body>
	</html>