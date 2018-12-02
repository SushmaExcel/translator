<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" src="css/new_styles.css">
<style>
@import url('css/new_styles.css');

/*html, body {margin: 0; height: 100%; overflow: scroll;}*/
/*body {

	/*background-image: url("6.jpg");
	background-position: center;
	background-repeat: repeat;
	background-size: cover;
	height: 100%
}*/

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: white;
	width: 528px;
	
}

li {
    float: left;
}

li a.one {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	background-color: #5D5C61;
	width: 100px;
}
li a.two {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	background-color: #379683;
	width: 100px;
}
li a.three {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	background-color: #7395AE;
	width: 100px;
}
li a.four {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
	background-color: #B1A296;
	width: 100px;
}
li a.one:hover {
    background-color: #ccd9ff;
	color: black;
}
li a.two:hover {
    background-color: #ccd9ff;
	color: black;
}
li a.three:hover {
    background-color: #ccd9ff;
	color: black;
}
li a.four:hover {
    background-color: #ccd9ff;
	color: black;
}
.container{
	position: relative;
}
h1 {
text-align: center;
font-family: "Courier New", Monospace;
color: rgba(50,50,255,1);
}
h3 {
text-align: left;
font-family: "Courier New", Monospace;
color: rgba(100,50,150,1);
}
table {
border-collapse: collapse;
}
table {
border: 1px solid rgba(150,100,0,1);
}
th,td {
text-align: center;
padding: 7px;
border-bottom: 1px solid rgba(100,100,55,1);
}
th {
background-color: #6f6fdc
}
h4 {
text-align: left;
font-family: "Courier New", Monospace;
color: #9900ff;
}
input[type=text]{
width: 300px;
height: 65px;
font-size: 110%;
color: black;
background-color: white;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid green;
    border-radius: 4px;
}

button{
    background-color: #0066ff; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	width: 120px;
	height: 30px;
}

textarea{
width: 550px;
height: 75px;
font-size: 110%;
color: black;
background-color: white;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid green;
    border-radius: 4px;

}

tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color:#adadeb;}

.vanish{
	background-color:  white;
}
</style>
<script src="dummy.js"></script>

<!-- Jquery library   -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">	
</script>

<script src="aja1.js"></script>
<script src="aja2.js"></script>
<script src="adj_jq.js"></script> <!-- Jquery file -->
<script src="lines.js"></script>
<script src="lines1.js"></script>

</head>
<body>

<div style="position:absolute; left:500px; top:10px;width:45%;">
<ul>
  <li><a class="one" href="project1.1.php">Home</a></li>
  <li><a class="two" href="index.php">Contribute</a></li>
  <li><a class="three" href="look.php">Resources</a></li>
  <li><a class="four" href="settings.php">Contact Us</a></li>
</ul>
</div>

<div class="heading" style=" position:absolute;left:690px;top:100px;align: center;">
<h1> WELCOME </h1>
<h1>नमस्ते</h1>
</div>



<form>
<div style="position:absolute; left:620px; top:260px;width:45%;">
<h4 id="hindi-head" class="head"> In Hindi Script: </h4>
<input type="text" name="hindi" id="hin" placeholder="  Hindi Script ..."><br>
</div>
<div style="position:absolute; left:960px; top:260px;width:45%;">
<h4>In English Script:</h4>
<input type="text" name="ITRANS" id="it_hin" placeholder="  English Script ..."><br><br>
<button type="button" id="in_itrans" onclick="showItWord();getEeg1();getHeg1()">Translate</button>
</div>
<div style="position:absolute; left:280px; top:260px;width:45%;">
<h4>ITRANS form of Hindi word: </h4>
<input type="text" name="english" id="eng" placeholder="  Itrans form ..." onkeypress="showhindi(event)"><br><br>
<button type="button" onclick="showEnglish();getEeg();getHeg()" style="margin-bottom: 3%;">Translate</button><br>
</div>
<div style="position:absolute; left:200px; top:490px;width:45%;">
<h4>English Sentence</h4><br>
<textarea rows="3" cols="73" name="eng_sent" id="eng_eg" class="vanish" readonly style="margin-bottom: 3%;"></textarea><br>
</div>
<div style="position:absolute; left:800px; top:490px;width:45%;">
<h4>Hindi Sentence</h4><br>
<textarea rows="3" cols="73" name="hin_sent" id="hin_eg" class="vanish" background-color="white" readonly></textarea>
</div>
<br>
</form>


<div style="position:absolute; left:39%; top:720px;width:45%;">
<h3>ITRANS transliteration scheme</h3>
</div>
<div style="position:absolute; left:14%; top:760px;width:45%;">
<h4>Vowels</h4>
<table width="25%">
<tr>
	<th>Devanāgarī</th>
	<th>ITRANS</th>
</tr>
<tr>
	<td>अ </td>
	<td>a</td>
</tr>
<tr>
	<td>आ </td>
	<td>aa</td>
</tr>
<tr>
	<td>इ  </td>
	<td>i</td>
</tr>
<tr>
	<td>ई </td>
	<td>ii</td>
</tr>
<tr>
	<td>उ </td>
	<td>u</td>
</tr>
<tr>
	<td>ऊ </td>
	<td>uu</td>
</tr>
<tr>
	<td>ए </td>
	<td>e</td>
</tr>
<tr>
	<td>ऐ </td>
	<td>ai</td>
</tr>
<tr>
	<td>ओ </td>
	<td>o</td>
</tr>
<tr>
	<td>औ </td>
	<td>au</td>
</tr>
<tr>
	<td>ऋ </td>
	<td>RRi</td>
</tr>
<tr>
	<td>ॠ </td>
	<td>RRI</td>
</tr>
<tr>
	<td>अं</td>
	<td>.n</td>
</tr>
<tr>
	<td>अः </td>
	<td>H</td>
</tr>
<tr>
	<td>अँ </td>
	<td>.N</td>
</tr>
</table>
</div>
<div style="position:absolute; left:44%; top:760px;width:45%;">
<h4>Consonants</h4>
<table>
<tr>
	<td>क</td>
	<td>ख</td>
	<td>ग</td>
	<td>घ</td>
	<td>ङ</td>
</tr>
<tr>
	<td>ka</td>
	<td>kha</td>
	<td>ga</td>
	<td>gha</td>
	<td>~Na</td>
</tr>
<tr>
	<td>च</td>
	<td>छ</td>
	<td>ज</td>
	<td>झ</td>
	<td>ञ</td>
</tr>
<tr>
	<td>cha</td>
	<td>chh</td>
	<td>ja</td>
	<td>jha</td>
	<td>~na</td>
</tr>
<tr>
	<td>ट</td>
	<td>ठ</td>
	<td>ड</td>
	<td>ढ</td>
	<td>ण</td>
</tr>
<tr>
	<td>Ta</td>
	<td>Tha</td>
	<td>Da</td>
	<td>Dha</td>
	<td>Na</td>
</tr>
<tr>
	<td>त</td>
	<td>थ</td>
	<td>द</td>
	<td>ध</td>
	<td>न</td>
</tr>
<tr>
	<td>ta</td>
	<td>tha</td>
	<td>da</td>
	<td>dha</td>
	<td>na</td>
</tr>
<tr>
	<td>प</td>
	<td>फ</td>
	<td>ब</td>
	<td>भ</td>
	<td>म</td>
</tr>
<tr>
	<td>pa</td>
	<td>pha</td>
	<td>ba</td>
	<td>bha</td>
	<td>ma</td>
</tr>
<tr>
	<td>य</td>
	<td>र</td>
	<td>ल</td>
	<td>व</td>
	<td></td>
</tr>
<tr>
	<td>ya</td>
	<td>ra</td>
	<td>la</td>
	<td>va</td>
	<td></td>
</tr>
<tr>
	<td>श</td>
	<td>ष</td>
	<td>स</td>
	<td>ह</td>
	<td></td>
</tr>
<tr>
	<td>sha</td>
	<td>Sha</td>
	<td>sa</td>
	<td>ha</td>
	<td></td>
</tr>
</table>
</div>
<div style="position:absolute; left:74%; top:760px;width:45%;">
<h4>Irregular Consonants</h4>
<table>
<tr>
	<td>क्ष </td>
	<td>ज्ञ</td>
	<td>श्र</td>
	<td>त्र</td>
</tr>
	<td>kSha</td>
	<td>j~na</td>
	<td>shra</td>
	<td>tra</td>
</tr>
</table>
</div>
<div style="position:absolute; left:74%; top:960px;width:45%;">
<h4>Consonants with Nuqta</h4>
<table width="18%">
<tr>
	<td>क़</td>
	<td>qa</td>
</tr>
<tr>
	<td>ख़ </td>
	<td>Ka</td>
</tr>
<tr>
	<td>ग़</td>
	<td>Ga</td>
</tr>
<tr>
	<td>ज़ </td>
	<td>za</td>
</tr>
<tr>
	<td>फ़ </td>
	<td>fa</td>
</tr>
<tr>
	<td>ड़ </td>
	<td>.Da</td>
</tr>
<tr>
	<td>ढ़ </td>
	<td>.Dha</td>
</tr>
</table>
</div>
</div>
</div>

<script>
	//adding event listneres for the text to dynamicaly convert ...
	var eng_in = document.getElementById("eng");
	eng_in.addEventListener("keypress", showhindi);
	eng_in.addEventListener("keyup",showhindi);
	eng_in.addEventListener("input",showhindi);
	eng_in.addEventListener("change",showhindi);

</script>

</body>
</html>
