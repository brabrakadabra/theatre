<?php
$recipient="patryk.poleszczuk@aweo.pl";
$subject= "wiadomosc ze strony gen"; 

$msg= $_POST["msg"];
$firma= $_POST["nazwagenergo"]; 
$name= $_POST["namegenergo"]; 
$email= $_POST["emailgenergol"];
$temat= $_POST["temat"];
$tel= $_POST["telgenergo"];
$sender= 'From:' .$_POST["namegenergo"]. '<' .$_POST["emailgenergol"]. '>';
$msgToSent=  "\n Nazwa firmy: ".$_POST["nazwagenergo"].
             "\n imie i nazwisko: ".$_POST["namegenergo"].
             "\nnr tel: ".$_POST["telgenergo"].
             "\nemail: ".$_POST["emailgenergo"].
             "\ntemat: ".$_POST["tematgenergo"].
             "\ntresc wiadomosci: " .$_POST["textgenergo"];

if (empty($firma) || strlen($firma)<=2) {
    echo "Nie zostalo wprowadzona nazwa firmy nadawca lub jest ono zbyt krotkie<br />";
} elseif (empty($name) || strlen($name)<=2) {
    echo "Nie zostalo wprowadzone imie i nazwisko nadawcy lub jest ono zbyt krotkie<br />";
} elseif (!ereg("^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-_]+.[a-z]{2,4}$", $_POST["emailgenergo"])) {
    echo "Wprowadzony adres e-mail jest zbyt krotki lub niepoprawny.<br />";
} elseif (!ereg("^[0-9]{4,}$", $_POST["telgenergo"])) {
    echo "Wprowadzony nr telefonu jest zbyt krotki lub niepoprawny.<br />";	
} echo "asdas";
if (strlen($firma)>=3 and strlen($name)>=3 and strlen($email)>=3 and strlen ($tel)>=3) {
    echo "Dziękujemy! \nWiadomosc zostala wyslana pomyslnie!<br />";
    @mail($recipient, $subject, $msgToSent, $sender);
     }
     
     /*
$mail = $_POST['emailgenergo'];
	$headers1 = "From: ".$mail."\r\nReply-To: ".$mail."\r\nContent-type: text/html; charset=utf-8";
	$headers2 = "From: patryk.poleszczuk@aweo.pl\r\nReply-To: ".$mail."\r\nContent-type: text/html; charset=utf-8";
	$message = 'Nazwa firmy: <b>'.$_POST['nazwagenergo'].'</b><br><br>';
	$message = 'Imię i nazwisko: <b>'.$_POST['namegenergo'].'</b><br><br>';
	$message .= 'Numer telefonu: '.$_POST['telgenergo'].'<br><br>';
	$message .= 'E-mail: '.$_POST['emailgenergo'].'<br><br>';
	$message .= 'Temat wiadomości: '.$_POST['tematgenergo'].'<br><br>';
	$message .= 'Wiadomość: '.$_POST['textgenergo'].'<br><br>';	
	
	
	if (stristr($mail, 'http://') == FALSE  &&  stristr($message, 'http://') == FALSE)
	{
		
		if (empty($firma) || strlen($firma)<=2) {
		    echo "Nie zostalo wprowadzona nazwa firmy nadawca lub jest ono zbyt krotkie<br />";
		} elseif (empty($name) || strlen($name)<=2) {
		    echo "Nie zostalo wprowadzone imie i nazwisko nadawcy lub jest ono zbyt krotkie<br />";
		} elseif (!ereg("^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-_]+.[a-z]{2,4}$", $_POST["email"])) {
		    echo "Wprowadzony adres e-mail jest zbyt krotki lub niepoprawny.<br />";
		} elseif (!ereg("^[0-9]{4,}$", $_POST["tel"])) {
		    echo "Wprowadzony nr telefonu jest zbyt krotki lub niepoprawny.<br />";	
		} 
		elseif (strlen($firma)>=3 && strlen($name)>=3 && strlen($email)>=3 && strlen ($tel)>=3) {
		    echo "Dziękujemy! \nWiadomosc zostala wyslana pomyslnie!<br />";
		
		
		if($mail != "") 
		{
			@mail($mail, "Twoje zapytanie ze strony www.genergo.pl", $message."\n", $headers2);
			@mail('patryk.poleszczuk@aweo.pl', "Zapytanie ze strony www.genergo.pl", $message."\n", $headers1);
		}
		header("Location: index.php");
	}*/
	 
?>