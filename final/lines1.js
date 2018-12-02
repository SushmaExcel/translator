
function getEeg1(){
	console.log("entered for sentence.");
	var str_heng = document.getElementById("it_hin").value;
	console.log(str_heng);
	if(str_heng == "") {
		document.getElementById("eng_eg").value = "";
	}
	else {
		if(window.XMLHttpRequest){
			xmlHttp = new XMLHttpRequest();
		}
		else {
			xmlHttp = ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlHttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById("eng_eg").value = this.responseText;
			}
		};
		xmlHttp.open("GET", "geteng_eg1.php?q="+str_heng, true);
		xmlHttp.send();
	}
}


function getHeg1(){
	console.log("entered for second time");
	var str_eg = document.getElementById("it_hin").value;
	console.log(str_eg);
	if(str_eg == "") {
		document.getElementById("hin_eg").value = "";
	}
	else {
		if(window.XMLHttpRequest){
			xmlHttp = new XMLHttpRequest();
		}
		else {
			xmlHttp = ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlHttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				document.getElementById("hin_eg").value = this.responseText;
			}
		};
		xmlHttp.open("GET", "gethin_eg1.php?q="+str_eg, true);
		xmlHttp.send();
	}
}