	<?php   
	
  
  //session_start();
  //session_destroy();

	include ( 'connect_to_mysql.php' ); 
	
	mysql_query("DROP DATABASE IF EXISTS AtmDatabase;") or die(mysql_error());
  	mysql_query("CREATE DATABASE AtmDatabase;") or die(mysql_error());
    mysql_select_db("AtmDatabase") or die(mysql_error());
  	
  	mysql_query("CREATE TABLE Customer (
  		CustomerID INT NOT NULL, 
  		FirstName VARCHAR(50),
  		LastName VARCHAR(50),/*dsfasdf*/
  		PRIMARY KEY(CustomerID)
  		)") or die(mysql_error());

  	mysql_query("INSERT INTO Customer VALUES 
  		('123456', 'John', 'Doe'),
  		('234567', 'Jane', 'Adams'),
  		('345678', 'Bill', 'Paulson'),
  		('456789', 'Jack', 'Apple')") or die(mysql_error());

  	mysql_query("CREATE TABLE Account(
  		AccountNumber VARCHAR(6),  /* 8 Digits */
  		CustomerID INT NOT NULL,
  		Balance DECIMAL(7,2),
  		Pin VARCHAR(4),

  		PRIMARY KEY (AccountNumber), 
  		FOREIGN KEY (CustomerID) REFERENCES Customer (CustomerID)	
		)") or die(mysql_error());
	
	mysql_query("INSERT INTO Account VALUES 
  		('123456', '123456', '1000.42', '1234'),
  		('234567', '234567', '5500.00' , '2345'),
  		('345678', '345678', '6000.13', '3456'),
  		('456789', '456789', '764.02' , '4567')") or die(mysql_error());

 	mysql_query("CREATE TABLE Transaction(
  		TransactionID INT NOT NULL AUTO_INCREMENT,
  		TransactionType VARCHAR(9),
  		TransactionAmount DECIMAL(7,2),
  		AccountNumber INT NOT NULL,
  		TransactionDate DATETIME,
 		PRIMARY KEY (TransactionID))") or die(mysql_error());
 
		
  	mysql_query("INSERT INTO Transaction (TransactionType, TransactionAmount, AccountNumber, TransactionDate) 
	VALUES ('Withdrawl', '112.11', '123456', '2011-11-11 11:11:11'),
  		('Deposit', '100.00' , '123456', '2011-11-11 11:22:22'),
      ('Withdrawl', '520.82' , '123456', '2011-11-11 11:33:33'),
      ('Deposit', '200.00' , '123456', '2011-11-11 11:44:44'),
      ('Withdrawl', '942.82' , '123456', '2009-11-11 11:55:55'),
      ('Deposit', '120.00' , '123456', '2008-11-11 11:00:00'),
  		('Withdrawl', '300.13', '234567', '2011-11-11 22:11:11'),
  		('Deposit', '740.00' , '234567', '2011-11-11 11:11:11')") or die(mysql_error());  		

      //  INSERT AFTER TRANSACTION INSERT
      mysql_query("CREATE TABLE ATM (
      ATMID VARCHAR(5),
      CashAvailable DECIMAL(7,2),
      PRIMARY KEY(ATMID)
      )") or die(mysql_error());

      mysql_query("INSERT INTO ATM VALUES 
      ('10023', '5000.00'),
      ('07036', '5000.00'),
      ('23412', '5000.00'),
      ('49879', '5000.00')") or die(mysql_error());

echo('<script>document.location.href="index.php"</script>');

?>