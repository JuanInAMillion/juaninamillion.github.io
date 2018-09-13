// JavaScript Document
var num;
var num2;
var length =0;
var length2 =0;
var name_field;
var name_of_img;
var bactive = false;

function passPin(num){
var v=num;

if(length == 0 || length <4){

length++;
	
if(document.form.pin.value == ""){

document.form.pin.value=v;
document.getElementById("display").innerHTML= "*";

}

else {
	
	document.form.pin.value = document.form.pin.value + v;
	document.getElementById("display").innerHTML = document.getElementById("display").innerHTML + "*";
	
	}
}

else{
	
	alert("Your PIN can not be more then four digits long");
	
	}
	

}



<!-- This script and many more are available free online at -->

<!-- The JavaScript Source!! http://www.javascriptsource.com -->

<!-- Begin

function load_page(){

  window.location="index.php" // place file name here

}

function clearpin(){
	if(document.getElementById("display").innerHTML.charAt(0)== "*"){
	document.form.pin.value= "";
	document.getElementById("display").innerHTML = "";
	length = 0;
	}
}
function clearaccount(){
	if(document.getElementById("display").innerHTML.charAt(0)== "*"){
	document.form.account.value= "";
	document.getElementById("display").innerHTML = "";
	length2 = 0;
	}
}

function pincheck(){
	
	if(length< 4){
		
		alert("You need four digits");
		
		}
	
	}
// End -->

function passAccount( num2){
	
	var v=num2;
if(bactive==true){	

if(length2 == 0 || length2 <6){

length2++;
	
if(document.form.account.value == ""){

document.form.account.value=v;
document.getElementById("display").innerHTML= "*";

}

else {
	
	document.form.account.value = document.form.account.value + v;
	document.getElementById("display").innerHTML = document.getElementById("display").innerHTML + "*";
	
	}


}

else{
	
	alert("Your Account can not be more then six digits long");
	
	}
}
	}
	

function accheck(){
	if(bactive == true){
	if(length2 < 6){
		
		alert("You need six digits");
		
		}
	
	}
}

function changeimg(name_field, name_of_img) {
	document[name_field].src= "images/" + name_of_img + ".png";
}


function entercard(name_field, name_of_img){
	if(bactive==false){
	document.getElementById("top").innerHTML = " Enter Account Number:";
	document.getElementById("arrow").innerHTML = "";
	document[name_field].src= "images/" + name_of_img + ".gif";
	bactive = true;
	document.form.nocardinserted.value = 1;
	}
}



