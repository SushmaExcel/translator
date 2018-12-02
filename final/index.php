<!DOCTYPE html>
<html>
<head>
<style>
body{
	/*background-color: #3385ff /*#1a75ff*/;
	background-image: url("4.jpg");
	/*background-position: center;*/
	background-repeat: repeat-y;
	background-size: cover;
	height: 100%
}

h1{
	color: #008000;
	text-align: center;
	font-family: "Courier New", Monospace;
	font-style: italic;
	font-size: 40px;
	
}

input[type=submit]{
    background-color: #ffff00; /* Green */
    border: 2px rgba(0,0,0,0);
	/*border-color: #1a75ff;*/
    color:  #006600;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
	height: 80px;
	width: 300px;
}
input[type=submit]:hover{
background-color:  #008000;
color: black;
}
.options{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}


</style>
</head>
<body> 
<br><br><br>

<div style="" class="options">
<form action="add.php" method="post">
<input type="submit" name="submit" value="Add new word">
</form>
<br>

<form action="del.php" method="post">
<input type="submit" name="submit" value="Delete word">
</form>
<br>

<form action="look.php" method="post">
<input type="submit" name="submit" value="What's already there ?">
</form>
<br>

<form action="settings.php" method="post">
<input type="submit" name="submit" value="Contact Us">
</form>
<br>

<form action="project1.1.php" method="post">
<input type="submit" name="submit" value="Back to Home">
</form>
</div>
</body>
</html>
