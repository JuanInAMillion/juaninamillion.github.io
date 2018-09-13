<?php   
		
    session_start();
    session_destroy();

	include ( 'connect_to_mysql.php' );  
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Akhtar Bank</title>
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
    	<p id= "top" > Welcome To Akhtar Bank</p>
        <p id="display"></p>
        
        <div id="arrow"> <p> Click Card </p><img src="images/arrow.gif" height="140px" class="arrow_gif" /> </div>
    </div>
    <div id="slots">
    	<div id="cash">
        <img name= 'cash' src="images/blackcash.png"  alt="Cash Slot" class="cash"/>
        </div>
        <div id="card">
        <img name= 'card' src="images/stillcards.gif" onClick="entercard('card', 'movingcard');" alt="Card Slot" class="card"/>
        </div>
    </div>
    </div>
    
    <div id="pad">
    	<div id="numbers">
        <form name="main" method="post"/>
        
        <table cellpadding="5" >
        <tr> 
        <td><img src = "images/1.png"     onClick="passAccount(1);" name = "one" onMouseUp="changeimg('one', 1);" onMouseDown="changeimg('one', '1click');" onMouseOut="changeimg('one', 1);" width="70" height="54" /></td>
        <td><img src = "images/2.png"     onClick="passAccount(2);" name = "two" onMouseUp="changeimg('two', 2);" onMouseDown="changeimg('two', '2click');" onMouseOut="changeimg('two', 2);" width="70" height="54"/></td> 
        <td><img src = "images/3.png"     onClick="passAccount(3);" name = "three" onMouseUp="changeimg('three', 3);" onMouseDown="changeimg('three', '3click');" onMouseOut="changeimg('three', 3);"  width="70" height="54"/></td> 
        </tr>
        
        <tr> 
        <td><img src = "images/4.png"  onClick="passAccount(4);"  name = "four" onMouseUp="changeimg('four', 4);" onMouseDown="changeimg('four', '4click');"  onMouseOut="changeimg('four', 4);" width="70" height="54"/></td>
        <td><img src = "images/5.png"  onClick="passAccount(5);"  name = "five" onMouseUp="changeimg('five', 5);" onMouseDown="changeimg('five', '5click');" onMouseOut="changeimg('five', 5);" width="70" height="54"/></td> 
        <td><img src = "images/6.png"  onClick="passAccount(6);"  name = "six" onMouseUp="changeimg('six', 6);" onMouseDown="changeimg('six', '6click');" onMouseOut="changeimg('six', 6);" width="70" height="54"/></td> 
        </tr>
        
        <tr> 
        <td><img src = "images/7.png"  onClick="passAccount(7);" name = "seven" onMouseUp="changeimg('seven', 7);" onMouseDown="changeimg('seven', '7click');" onMouseOut="changeimg('seven', 7);" width="70" height="54"/></td>
        <td><img src = "images/8.png"  onClick="passAccount(8);" name = "eight" onMouseUp="changeimg('eight', 8);" onMouseDown="changeimg('eight', '8click');" onMouseOut="changeimg('eight', 8);" width="70" height="54"/></td> 
        <td><img src = "images/9.png"  onClick="passAccount(9);" name = "nine" onMouseUp="changeimg('nine', 9);" onMouseDown="changeimg('nine', '9click');"  onmouseout="changeimg('nine', 9);" width="70" height="54"/></td> 
        </tr>
        
        <tr> 
        <td><img src = "images/blank.png"  onClick="" name = "blank1" onMouseUp="changeimg('blank1', 'blank');" onMouseDown="changeimg('blank1', 'blankclick');" onMouseOut="changeimg('blank1', 'blank');" width="70" height="54" /></a></td>
        <td><img src = "images/0.png"  	   onclick="passAccount(0);" name = "zero" onMouseUp="changeimg('zero', 0);" onMouseDown="changeimg('zero', '0click');"  onmouseout="changeimg('zero', 0);" width="70" height="54"/></td> 
        <td><img src = "images/blank.png"  onClick="" name = "blank" onMouseUp="changeimg('blank', 'blank');" onMouseDown="changeimg('blank', 'blankclick');" onMouseOut="changeimg('blank', 'blank');" width="70" height="54"/></td> 
        </tr>   
        </table>
        
        </form>
    </div>
        
        <div id="funcKeys">
        	<form name= "form" method = "post" action = "pinnumber.php">

            <table cellpadding="5">
            <tr><td><input type="submit" value ="sumit" class = "enterbutton" onclick ="accheck();"/></td></tr>
            <tr><td><img src = "images/clear.png"   onClick=" clearaccount();" name = "clear" onMouseUp="changeimg('clear', 'clear');" onMouseDown="changeimg('clear', 'clearclick');" onMouseOut="changeimg('clear', 'clear');" width="70" height="54"/></td></tr>
            <tr><td><img src = "images/cancel.png"  onClick="load_page();" name = "cancel" onMouseUp="changeimg('cancel', 'cancel');"onmousedown="changeimg('cancel', 'cancelclick');" onMouseOut="changeimg('cancel', 'cancel');" width="70" height="54"/></td></tr>
            </table>
            <input type="hidden"  name="account" value />
            <input type="hidden"  name="nocardinserted" value = "5"/>
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
