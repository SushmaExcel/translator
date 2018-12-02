
/*const fil = require('/dummy');
console.log(fil);*/

function showItWord() {
    console.log("came in aja");
    var answer = "";
    var str = document.getElementById("it_hin").value;
    console.log(str);
    if (str == "") {
        document.getElementById("eng").value = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                answer = this.responseText;
                //console.log("answser is: ");
                //console.log(answer);
                document.getElementById("eng").value = answer;
                showhindi();
            }
        };
        xmlhttp.open("GET","getitrans.php?q="+str,true);
        xmlhttp.send();
    }
    //console.log("done1");
    //var ans = document.getElementById("eng").value;
    //console.log("ans is ");
    //console.log(answer);
 
  //console.log("done2");
}