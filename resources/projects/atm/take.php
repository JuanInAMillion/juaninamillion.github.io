<?php 

    include ( 'connect_to_mysql.php' ); 
	

   session_start();
    $AccountNumber = $_SESSION['accountnumber'];
    $Amount = $_POST['amount'];
    unset($_SESSION['counter']);

    
    function Withdraw($wAccountNumber, $wAmount) {
  
                $strCheckBalanceQuery = "SELECT Balance FROM Account WHERE AccountNumber = ". $wAccountNumber . "";

                $rs = mysql_query($strCheckBalanceQuery);

                while($row = mysql_fetch_array($rs)) { 

                        $newBalance = $row['Balance'];
                        $newBalance = $newBalance - $wAmount; 

                        if ($newBalance < 0){
                                return -1;
                        }
                }


                $strUpdateBalanceQuery = "UPDATE Account SET "; 
                $strUpdateBalanceQuery = $strUpdateBalanceQuery . "Balance =  " . $newBalance . " "; 
                $strUpdateBalanceQuery = $strUpdateBalanceQuery . "WHERE AccountNumber = " . $wAccountNumber . ""; 

                mysql_query($strUpdateBalanceQuery);
				


				$strCashAvailableQuery = "SELECT CashAvailable FROM ATM WHERE ATMID = '10023'";



               $rs = mysql_query($strCashAvailableQuery);

               while($row = mysql_fetch_array($rs)) {

                       $newCashAvailable = $row['CashAvailable'];
                       $newCashAvailable  = $newCashAvailable - $wAmount;

                       if ($newCashAvailable < 0){
                               return -2;
                       }
               }

               $strUpdateBalanceQuery = "UPDATE ATM SET ";
               $strUpdateBalanceQuery = $strUpdateBalanceQuery . "CashAvailable =  " . $newCashAvailable . " ";
               $strUpdateBalanceQuery = $strUpdateBalanceQuery . "WHERE ATMID = '10023'";

               mysql_query($strUpdateBalanceQuery);
				
/*
        mysql_query("CREATE TABLE Transaction(
                TransactionID VARCHAR(5),
                TransactionType VARCHAR(9),  /*Withdrawl, CheckBalance, or Print
                TransactionAmount DECIMAL(7,2),
                AccountNumber INT NOT NULL,
                TransactionDate DATETIME,*/

                $strInsertTransactionQuery = "INSERT INTO Transaction("; 

           //     $strInsertTransactionQuery = $strInsertTransactionQuery . "TransactionID, "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . "TransactionType, "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . "TransactionAmount, "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . "AccountNumber, "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . "TransactionDate) ";

                $strInsertTransactionQuery = $strInsertTransactionQuery . "VALUES (";

          //      $strInsertTransactionQuery = $strInsertTransactionQuery . "'31213', "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . "'Withdrawl', "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . $wAmount . ", "; 
                $strInsertTransactionQuery = $strInsertTransactionQuery . $wAccountNumber . ", "; 
                
                $strInsertTransactionQuery = $strInsertTransactionQuery . "Now())";
//'2012-04-05 15:30:11'

                //$strInsertTransactionQuery = $strInsertTransactionQuery . "WHERE AccountNumber = " . $wAccountNumber . ""; 

                mysql_query($strInsertTransactionQuery) or die(mysql_error()); 
         
                $rs = mysql_query($strCheckBalanceQuery);
                
                while($row = mysql_fetch_array($rs)) {

                return $row['Balance']; // . "<br />";

               // return $newBalance;

                }

}
   

 /*   function CheckBalance($bAccountNumber) {
      $strCheckBalanceQuery = "SELECT Balance FROM Account WHERE AccountNumber = ". $bAccountNumber . "";
      $rs = mysql_query($strCheckBalanceQuery);
      while($row = mysql_fetch_array($rs)) {      
          return $row['Balance']; 
      }
    }
*/

    $newBalance = Withdraw($AccountNumber, $Amount);

    if ($newBalance == -1){
            echo('<script>document.location.href="werror.php"</script>');
     }
	else if ($newBalance == -2){
            echo('<script>document.location.href="atmerror.php"</script>');
     }


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
    	<p id= "top" class="takePage" align="center"> Your Current Balance is: <?php echo $newBalance; ?> <br/><br/> <span class="smaller">Please take your cash.</span></p>
        
        <div id="twoButtons" class="takePage">
           
            <form name="main" method="post" action="pinnumber.php">
              <input type="submit" class="backbuttontake" />
              
              
            </form>
             <form name="main" method="post" action="thankyou.php">
                <input type="submit" class="donebuttontake" />
            
            </form>
                
            
        	</div>
        
        
    </div>
    <div id="slots">
    	<div id="cash">
        <img name= 'cash' src="images/movingcash.gif" onclick= "changeimg('cash', 'blackcash');"  alt="Cash Slot" class="cash"/>
        </div>
        <div id="card">
        <img name= 'card' src="images/blackcard.png" alt="Card Slot" class="card"/>
        </div>
    </div>
    </div>
    
    <div id="pad">
    	<div id="numbers">
        <form name="main" method="post">

<table cellpadding="5" >
<tr> 
<td><img src = "images/1.png"  onClick="" name = "one" onMouseUp="changeimg('one', 1);" onMouseDown="changeimg('one', '1click');" onMouseOut="changeimg('one', 1);" width="70" height="54" /></td>
<td><img src = "images/2.png"  onClick="" name = "two" onMouseUp="changeimg('two', 2);" onMouseDown="changeimg('two', '2click');" onMouseOut="changeimg('two', 2);" width="70" height="54"/></td> 
<td><img src = "images/3.png"  onClick="" name = "three" onMouseUp="changeimg('three', 3);" onMouseDown="changeimg('three', '3click');" onMouseOut="changeimg('three', 3);"  width="70" height="54"/></td>

</tr>

<tr> 
<td><img src = "images/4.png"  onClick=""  name = "four" onMouseUp="changeimg('four', 4);" onMouseDown="changeimg('four', '4click');" onMouseOut="changeimg('four', 4);" width="70" height="54"/></td>
<td><img src = "images/5.png"  onClick=""  name = "five" onMouseUp="changeimg('five', 5);" onMouseDown="changeimg('five', '5click');" onMouseOut="changeimg('five', 5);"width="70" height="54"/></td> 
<td><img src = "images/6.png"  onClick=""  name = "six" onMouseUp="changeimg('six', 6);" onMouseDown="changeimg('six', '6click');" onMouseOut="changeimg('six', 6);" width="70" height="54"/></td> 
</tr>

<tr> 
<td><img src = "images/7.png"  onClick="" name = "seven" onMouseUp="changeimg('seven', 7);" onMouseDown="changeimg('seven', '7click');" onMouseOut="changeimg('seven', 7);" width="70" height="54"/></td>
<td><img src = "images/8.png"  onClick="" name = "eight" onMouseUp="changeimg('eight', 8);" onMouseDown="changeimg('eight', '8click');" onMouseOut="changeimg('eight', 8);" width="70" height="54"/></td> 
<td><img src = "images/9.png"  onClick="" name = "nine" onMouseUp="changeimg('nine', 9);" onMouseDown="changeimg('nine', '9click');" onMouseOut="changeimg('nine', 9);" width="70" height="54"/></td> 
</tr>

<tr> 
<td><img src = "images/blank.png"  onClick=";" name = "blank1" onMouseUp="changeimg('blank1', 'blank');" onMouseDown="changeimg('blank1', 'blankclick');" onMouseOut="changeimg('blank1','blank');" width="70" height="54" /></a></td>
<td><img src = "images/0.png"  onClick="" name = "zero" onMouseUp="changeimg('zero', 0);" onMouseDown="changeimg('zero', '0click');" onMouseOut="changeimg('zero',0);"width="70" height="54"/></td> 
<td><img src = "images/blank.png"  onClick=";" name = "blank" onMouseUp="changeimg('blank', 'blank');" onMouseDown="changeimg('blank', 'blankclick');" onMouseOut="changeimg('blank','blank');" width="70" height="54"/></td> 
</tr>


</table>
</form>
        </div>
        
        <div id="funcKeys">
        	<form name= "form" method = "">

<table cellpadding="5">
<tr><td><img src = "images/enter.png" onClick="" name= "enter" onMouseDown="changeimg('enter', 'enterclick')" onMouseUp="changeimg('enter', 'enter');" onMouseOut="changeimg('enter', 'enter');" width="70" height="54"/></td></tr>
<tr><td><img src = "images/clear.png"   onClick=" clearaccount();" name = "clear" onMouseUp="changeimg('clear', 'clear');" onMouseDown="changeimg('clear', 'clearclick');" onMouseOut="changeimg('clear', 'clear');" width="70" height="54"/></td></tr>
<tr><td><img src = "images/cancel.png"  onClick="load_page();" name = "cancel" onMouseUp="changeimg('cancel', 'cancel');"onmousedown="changeimg('cancel', 'cancelclick');" onMouseOut="changeimg('cancel', 'cancel');" width="70" height="54"/></td></tr>
</table>
<input type="hidden"  name="" value />
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
