<?php 

	include ( 'connect_to_mysql.php' ); 
	

	session_start();
	

	if ($_POST['account'] == "" && $_POST['nocardinserted'] == 5) {

		$AccountNumber = $_SESSION['accountnumber'];
		echo('<script>document.location.href="nocard.php"</script>');	
	}
	
	else if($_POST['account'] == ""){
		$AccountNumber = $_SESSION['accountnumber'];}
	
	

	else{

		$_SESSION['accountnumber'] = $_POST['account'];
		$AccountNumber = $_SESSION['accountnumber'];
	}

	$_SESSION['counter'];
	
		 
	

	///$AccountNumber = 123456;

 	function VerifyAccountNumber($vAccountNumber){//{, $wPin) {

 		$strCheckAccountQuery = "SELECT AccountNumber FROM Account WHERE AccountNumber = " . $vAccountNumber . ""; // AND Pin = " . $wPin . "";

  		$rs = mysql_query($strCheckAccountQuery);//$strSQL);
  		// Loop the recordset $rs
  		while($row = mysql_fetch_array($rs)) {
	  	

	  	if ($row['AccountNumber'] == $vAccountNumber) // == $vAccountNumber)
	  		return 1;
	  	else
	  	 	return 0;
	  	
	  	} 
	}

		if (VerifyAccountNumber($AccountNumber) == 0)
		{ 

		echo('<script>document.location.href="aerror.php"</script>');

	}
	



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Tempt</title>
<link rel="icon" type="image/png" href="symbol.png" />
<script type="text/javascript" src="scripts.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<link rel="stylesheet" type="text/css" href="style.css" />

<script>
$(document).ready(function() {
    $('#listItems').hide();
	$('#AccList').click(function (){ 
	
	if ($('#listItems').is(':visible')){ 
	$(this).val('Show list of Accounts');
	}
	else { 
	$(this).val('Hide list of Accounts');
	}
	
	$('#listItems').slideToggle();
	
	
	});
});
</script>
</head>

<body>

<div id="atm">
	<div id="atmbody">
    <div id="screen">
    	<p id= "top" > <span class="pinTry"><? if($_SESSION['counter'] == 2){ echo "(If PIN is incorrect, we will retain your card)"."<br/>";}?></span><? if ($_SESSION['counter'] > 0){ echo "Re-";}?>Enter Pin: </p>
        <p id="display"> </p>
        
       
    </div>
    <div id="slots">
    	<div id="cash">
        <img name= 'cash' src="images/blackcash.png"  alt="Cash Slot" class="cash"/>
        </div>
        <div id="card">
        <img name= 'card' src="images/blackcard.png" alt="Card Slot" class="card"/>
        </div>
    </div>
    </div>
    
    <div id="pad">
    	<div id="numbers">
        <form name="main" >

<table cellpadding="5" >
<tr> 
<td><img src = "images/1.png"  onClick="passPin(1);" name = "one" onMouseUp="changeimg('one', 1);" onMouseDown="changeimg('one', '1click');" onMouseOut="changeimg('one', 1);" width="70" height="54" /></td>
<td><img src = "images/2.png"  onClick="passPin(2);" name = "two" onMouseUp="changeimg('two', 2);" onMouseDown="changeimg('two', '2click');" onMouseOut="changeimg('two', 2);" width="70" height="54"/></td> 
<td><img src = "images/3.png"  onClick="passPin(3);" name = "three" onMouseUp="changeimg('three', 3);" onMouseDown="changeimg('three', '3click');" onMouseOut="changeimg('three', 3);"  width="70" height="54"/></td>

</tr>

<tr> 
<td><img src = "images/4.png"  onClick="passPin(4);"  name = "four" onMouseUp="changeimg('four', 4);" onMouseDown="changeimg('four', '4click');" onMouseOut="changeimg('four', 4);" width="70" height="54"/></td>
<td><img src = "images/5.png"  onClick="passPin(5);"  name = "five" onMouseUp="changeimg('five', 5);" onMouseDown="changeimg('five', '5click');" onMouseOut="changeimg('five', 5);"width="70" height="54"/></td> 
<td><img src = "images/6.png"  onClick="passPin(6);"  name = "six" onMouseUp="changeimg('six', 6);" onMouseDown="changeimg('six', '6click');" onMouseOut="changeimg('six', 6);" width="70" height="54"/></td> 
</tr>

<tr> 
<td><img src = "images/7.png"  onClick="passPin(7);" name = "seven" onMouseUp="changeimg('seven', 7);" onMouseDown="changeimg('seven', '7click');" onMouseOut="changeimg('seven', 7);" width="70" height="54"/></td>
<td><img src = "images/8.png"  onClick="passPin(8);" name = "eight" onMouseUp="changeimg('eight', 8);" onMouseDown="changeimg('eight', '8click');" onMouseOut="changeimg('eight', 8);" width="70" height="54"/></td> 
<td><img src = "images/9.png"  onClick="passPin(9);" name = "nine" onMouseUp="changeimg('nine', 9);" onMouseDown="changeimg('nine', '9click');" onMouseOut="changeimg('nine', 9);" width="70" height="54"/></td> 
</tr>

<tr> 
<td><img src = "images/blank.png"  onClick=";" name = "blank1" onMouseUp="changeimg('blank1', 'blank');" onMouseDown="changeimg('blank1', 'blankclick');" onMouseOut="changeimg('blank1','blank');" width="70" height="54" /></a></td>
<td><img src = "images/0.png"  onClick="passPin(0);" name = "zero" onMouseUp="changeimg('zero', 0);" onMouseDown="changeimg('zero', '0click');" onMouseOut="changeimg('zero',0);"width="70" height="54"/></td> 
<td><img src = "images/blank.png"  onClick=";" name = "blank" onMouseUp="changeimg('blank', 'blank');" onMouseDown="changeimg('blank', 'blankclick');" onMouseOut="changeimg('blank','blank');" width="70" height="54"/></td> 
</tr>


</table>
</form>
        </div>
        
        <div id="funcKeys">
        	<form name= "form" method = "post" action = "options.php">

            <table cellpadding="5">
            <tr><td> <input type ="submit" value = "sub" class = "enterbutton" onclick = "pincheck();"/> </td></tr>
            <tr><td> <img src = "images/clear.png"  onClick=" clearpin();" name = "clear" onMouseUp="changeimg('clear', 'clear');" onMouseDown="changeimg('clear', 'clearclick');" onMouseOut="changeimg('clear', 'clear');" width="70" height="54"/></td></tr>
            <tr><td><img src = "images/cancel.png"  onClick="load_page();" name = "cancel" onMouseUp="changeimg('cancel', 'cancel');"onmousedown="changeimg('cancel', 'cancelclick');" onMouseOut="changeimg('cancel', 'cancel');" width="70" height="54"/></td></tr>
            </table>
            <input type="hidden"  name="pin"/>
            
            
            </form>
        </div>
    </div>
    
    <div id="list">
    <input type="button" id="AccList" value="Show List of Accounts"  />
    <ol id="listItems">
    	<li>Account: 123456 || PIN: 1234</li>
        <li>Account: 234567 || PIN: 2345</li>
        <li>Account: 345678 || PIN: 3456</li>
        <li>Account: 456789 || PIN: 4567</li>
    </ol>
    </div>
    
</div>

</body>
</html>
