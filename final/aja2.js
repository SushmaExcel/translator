function showEnglish(){            //this is for showing in hindi form.
	var str_h = document.getElementById("eng").value;
	console.log(str_h);
	if(str_h == ""){
		document.getElementById("it_hin").value = "";
	}
	else {
		if(window.XMLHttpRequest){
			xmlHttp = new XMLHttpRequest();
		}
		else {
			xmlHttp = ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlHttp.onreadystatechange = function(){
			if (this.readyState == 4 && this.status == 200){
				document.getElementById("it_hin").value = this.responseText;
				showhindi();
			}
		};
		xmlHttp.open("GET", "geteng.php?q="+str_h, true);
		xmlHttp.send();
	}
}