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