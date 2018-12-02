trans = {   //this is also independent.
      //  ".h" : "\u094d",  //virama halanth ... important.
       // "{}" : "\u094d", 
        "0" :"\u0966", 
        "1" :"\u0967", 
        "2" :"\u0968", 
        "3" :"\u0969", 
        "4" :"\u096A", 
        "5" :"\u096B", 
        "6" :"\u096C", 
        "7" :"\u096D", 
        "8" :"\u096E", 
        "9" :"\u096F", 


        //".n" : "\u0902",        
        //"M" : "\u0902",
       // ".m" : "\u0902",
        ".a" : "\u093d",
       // "{\\m+}" : "\u0901\u094d", // chandrabindu virama 
        ".h" : "\u094d",
        "H" : "\u0903",
        "OM" : "\u0950",
        "AUM" : "\u0950",
        //"\\_" : "\u0952",
        //"./I" : "\u0964",
       // "./II" : "\u0965",


        "|" : "\u0964",
        "||" : "\u0965"        
}


consonants = {
        "k" : "\u0915",                        
        "kh" : "\u0916",        
        "g" : "\u0917",                
        "gh" : "\u0918",        
        "~N" : "\u0919",
        //"N^" : "\u0919",        
        "ch" : "\u091a",
       // "ch" : "\u091a",
        "chh" : "\u091b",
        "Ch" : "\u091b",       
       //"chh" : "\u091b",        
        "j" : "\u091c",
        "jh" : "\u091d",
        "~n" : "\u091e",        
        "JN" : "\u091e",
        "T" : "\u091f",
        "Th" : "\u0920",        
        "D" : "\u0921",
        "Dh" : "\u0922",
        "N" : "\u0923",
        "t" : "\u0924",        
        "th" : "\u0925",        
        "d" : "\u0926",        
        "dh" : "\u0927",        
        "n" : "\u0928",        
        "p" : "\u092a",        
        "ph" : "\u092b",        
        "b" : "\u092c",
        "bh" : "\u092d",
        "m" : "\u092e",
        "y" : "\u092f",
        "r" : "\u0930",
        "l" : "\u0932",
        "v" : "\u0935",
        "w" : "\u0935",
        "sh" : "\u0936",
        "Sh" : "\u0937",
        //"shh" : "\u0937",
        "S" : "\u0937",
        "Z" : "\u0937",
        "s" : "\u0938",
        "h" : "\u0939",
        "L" : "\u0933",
        "kSh" : "\u0915\u094d\u0937",
        "x" : "\u0915\u094d\u0937",
        "kS" : "\u0915\u094d\u0937",
        "GY" : "\u091c\u094d\u091e",
        "j~n" : "\u091c\u094d\u091e",
        "dny" : "\u091c\u094d\u091e",
}

vowels = {
       "a" :"\u0905", 
        "aa" :"\u0906", 
        //"A" :"\u0906", 
        "i" :"\u0907", 
        "ii" :"\u0908",         
        //"I" : "\u0908",
        "u" : "\u0909",
        "uu" : "\u090A",        
        //"U" : "\u090A",
        //"R^i" : "\u090B",
        "RRi" : "\u090B",        
        //"R^I" : "\u0960",
        "RRI" : "\u0960", //sanskrit
        //"L^i" : "\u090C",        
        "LLi" : "\u090C",
        //"L^I" : "\u0961",
        "LLI" : "\u0961", //sanskrit       
        "e" : "\u090f",
        "ai" : "\u0910",
        "o" : "\u0913",        
        "au" : "\u0914",
        ".n" : "\u0905\u0902",
        "H" : "\u0905\u0903", 
          ".c" : "\u0945",
         ".N" : "\u0905\u0901",
         ".h" : "\u094d"
}

matras = {  //dependent vowel . 
     "aa" :  "\u093e",
     //"A" :  "\u093e",
     "i" :  "\u093f",
     "ii" :  "\u0940",
     //"I" :  "\u0940",
     "u" :  "\u0941",
     "uu" :  "\u0942",
     //"U" :  "\u0942",
     //"R^i" :  "\u0943",
     "RRi" :  "\u0943",
     //"R^I" :  "\u0944",
     "RRI" :  "\u0944",
     "LLi" :  "\u0962",
     "LLI" :  "\u0963",
     //"L^I" :  "\u0963",
     //"LLI" :  "\u0963",
     "e" :  "\u0947",
     "ai" :  "\u0948",
     "o" :  "\u094b",
     "au" :  "\u094c",
      "H" : "\u0903",
      ".n" :  "\u0902",
       ".c" : "\u0945",
       ".N" : "\u0901",
       ".h" : "\u094d"
}


matraprefixes = {
     ".n" :  "\u0902", 
      "H" : "\u0903"
}

ignore = {
	" ": "\u0020"
}
/*
$eng = "siddhartha"
$hin = ""
$eng_len = strlen($eng)

$pos = 0

for($i = 0 $i < $eng_len ++i)
{
    echo("The letter is: $eng[$i]")
}

for($s = 0  $s < $trans)*/

function tohindi(){
	
	var str = document.getElementById("eng").value;
	//window.alert("str")
	//var hin = "";
}

var hin = ""
var index3 = 0;

function showhindi()
{   
    console.log("entered");
    //console.log(hexa);
	/*var ch = event.which || event.keyCode
    hin = hin + String.fromCharCode(ch)
	//var eng = document.getElementById("eng").
	document.getElementById("it_hin").innerHTML = hin
    windows.alert(hin)*/
    var check = "LLi"
    var ch_arr = ["\u0923","\u0903"];
    var latest = ch_arr.join('');
    //window.alert(latest);
    var che = check.substr(0,4);
    var chi = "\u0923\u0903  \u0950   \u0915\u0901\u094d  \u0965  \u0952"
    var hin = document.getElementById("eng").value;
    console.log(hin);
    //window.alert(hin);
    //document.getElementById("hin").value = hin;
    

                  /*  Converting it into hexa  */
    var index1 = 0;
	var index2 = 0;
	//var index3 = 0;
	var hexa = []
	var prev_conso = false;
	for(index2 = 0; index2 < hin.length; ++index2){
		if(index1 >= hin.length){ //to avoid infinite looping.
			break;
		}
		console.log("came");
		console.log(index1);
	// At each loop, we should start checking from index1.

	//now if there is a after consonant it should remain same.
	/*if(hin[index1] == "a" && pre_cons==true){ 
		indes1 = index1 + 1;
		continue; 
	}*/ //place it after checking two size condition.
    

   //checking the ignore condition ..
   var ign = hin.substr(index1 , 1);
   if(ign in ignore){
   	hexa.push(ignore[ign]);
   	index1 = index1 + 1;index3 = 0;
   	prev_conso = false;
   	continue;
   }

	//let us check for length 3.
	if(index1 <= (hin.length) - 3)
	{
    var check3 = hin.substr(index1,3) //starting from index1 of length 3.
    if((check3 in vowels) && prev_conso == true){
    	// then here it is a matra ... thus we should push the matra here.
    	hexa.push(matras[check3]);
    	index1 = index1 + 3;index3 = 1;
    	index3 = 0;
    	prev_conso = false;
    	continue;
    }
    else if(check3 in vowels && prev_conso == false){
        //here it is only the vowel no the matras
        hexa.push(vowels[check3]);
        index1 = index1 + 3;index3 = 1;
        prev_conso = false;
        continue;
    }
    if(check3 in consonants && prev_conso == true){
    	//here prev is also a consonant .. so its othu(telugu)
    	hexa.push(matras[".h"]);
    	hexa.push(consonants[check3]);
    	index1 = index1 + 3;index3 = 1;
    	prev_conso = true;
    	continue;
    }
    else if(check3 in consonants && prev_conso == false){
    	hexa.push(consonants[check3]);
    	index1 = index1 + 3;index3 = 1;
    	prev_conso = true;
    	continue;
    }
    else if(check3 in trans){
    	hexa.push(trans[check3]);
    	index1 = index1 + 3;index3 = 1;
    	prev_conso = false;
    	continue;
    }
                    }

    //now let us check for length 2.
    if(index1 <= (hin.length) - 2)
    {
    var check2 = hin.substr(index1, 2);
    if(check2 in vowels && check2 in matraprefixes && index1 > 0){
    	hexa.push(matraprefixes[check2]);
    	index1 = index1 + 2;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    else if(check2 in vowels && prev_conso == true){
    	hexa.push(matras[check2]);
    	index1 = index1 + 2;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    else if(check2 in vowels && prev_conso == false){
    	hexa.push(vowels[check2]);
    	index1 = index1 + 2;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    if(check2 in consonants && prev_conso == true){
    	hexa.push(matras[".h"]);
    	hexa.push(consonants[check2]);
    	index1 = index1 + 2;index3 = 1;
    	prev_conso = true;
    	continue;
    }
    else if(check2 in consonants && prev_conso == false){
    	hexa.push(consonants[check2]);
    	index1 = index1 + 2;index3 = 1;
    	prev_conso = true;
    	continue;
    }
    if(check2 in trans){
    	hexa.push(trans[check2]);
    	index1 = index1 + 2;index3 = 1;
        prev_conso = false;
    	continue;
    }
                      }
    //now checking for length 1.
    if(index1 <= (hin.length) - 1)
    {
    var check1 = hin.substr(index1,1);
    if(check1 == "a" && index1 > 0 && index3 > 0){
    	//prev_conso will remain same.
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    if(check1 == "a" && index1 > 0 && index3 == 0) {
    	hexa.push(vowels[check1]);
    	index1 = index1 + 1;
    	index3 = 1;
    	prev_conso = false;
    	continue;
    }
    if(check1 in vowels && prev_conso == true){
    	hexa.push(matras[check1]);
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    else if(check1 in vowels && check1 in matraprefixes && index1 > 0){
    	hexa.push(matraprefixes[check1]);
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    else if(check1 in vowels && prev_conso == false){
    	hexa.push(vowels[check1]);
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = false;
    	continue;
    }
    if(check1 in consonants && prev_conso == true){
    	hexa.push(matras[".h"]);
    	hexa.push(consonants[check1]);
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = true;
    	continue;
    }
    else if(check1 in consonants && prev_conso == false){
    	hexa.push(consonants[check1]);
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = true;
    	continue;
    }
    if(check1 in trans){
    	hexa.push(trans[check1]);
    	index1 = index1 + 1;index3 = 1;
    	prev_conso = false;
    	continue;
    }
              }
 }//end for.
  
  console.log(hexa);
  document.getElementById("hin").value = hexa.join('');
  //document.getElementById("it_hin").value = "";

} //end func.

