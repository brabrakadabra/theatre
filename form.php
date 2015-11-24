<?php
/*biuro@genergo.pl*/
$recipient="brabrakadabra@gmail.com";
$subject= "Wiadomość ze strony teatr"; 

$msg= $_POST["msg"];
$firma= $_POST["nazwagenergo"]; 
$name= $_POST["namegenergo"]; 
$email= $_POST["emailgenergo"];
$temat= $_POST["temat"];
$tel= $_POST["telgenergo"];
$sender= 'From:' .$_POST["namegenergo"]. '<' .$_POST["emailgenergo"]. '>';
$msgToSent=  "\nNazwa firmy: ".$_POST["nazwagenergo"].
             "\nImię i nazwisko: ".$_POST["namegenergo"].
             "\nNr tel: ".$_POST["telgenergo"].
             "\nEmail: ".$_POST["emailgenergo"].
             "\nTemat: ".$_POST["tematgenergo"].
             "\nTresc wiadomosci: " .$_POST["textgenergo"];
			 
		ob_start();	 
			 
	    @mail($recipient, $subject, $msgToSent, $sender);
		header("Location: dziekujemy.php");
		
		ob_end_flush();
		

?>