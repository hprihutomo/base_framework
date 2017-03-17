<!DOCTYPE html>
	<html>
		<head>
			<title>POP UP</title>
			<style type="text/css">
				#overBox{width:100%;height:100%; top:0;background:rgba(0,0,0,0.5);position: fixed; left: 0;}
			</style>
			<script type="text/javascript">
				function popUp () {
					var dawal = "<div id='overBox'>";
					var dakhir = "</div>";
					var saya = "<h1 style='color:white;margin:100px auto;width100px;'>Saya Muncul Disisni</h1>";
					var box = document.getElementById("box").innerHTML = dawal+saya+dakhir;
				}
			</script>
		</head>
		<body>
			<div id="box">mamam</div>
			<a href="#" onClick="popUp();">KLIC SAYA</a>
			
		</body>
	</html>