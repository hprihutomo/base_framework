
		
		// Ajax Create NEw
			var ajaxNew = indexAjax ();
			function indexAjax (){
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
			// Buat Fungsi For Do Proses
			function getAction (url){
				var warning  = document.getElementById("info_muncul");
				var penyakit = document.getElementById("penyakit");
				var gejala   = document.getElementById("gejala");
				var save     = "penyakit="+penyakit.value+"&gejala="+gejala.value;
				ajaxNew.open("POST",url,true);
				ajaxNew.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
				ajaxNew.onreadystatechange = function (){
					if (ajaxNew.readyState == 4 && ajaxNew.status == 200){
						warning.innerHTML = ajaxNew.responseText;
					}
				}
				ajaxNew.send(save);
				warning.innerHTML = "Wait For Seconds";
			}
		