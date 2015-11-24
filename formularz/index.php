<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"#"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl">
<head>
<title>Genergo izolacje termiczne</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/screen.css">
<link rel="stylesheet" href="css/lightbox.css">
<script src="js/gen_validatorv4.js"></script>
</head>
<body>
<?php 

include_once "../parts/sidebar-kontakt.php";?>
	<h2>Formularz kontaktowy</h2>
							<form method="post" action="form.php" autocomplete="on" id="qoute-form" name="myform" id="myform">
							<div style="width:100%;font-size:12px; color:#7a4f67; text-align:left;">Nazwa firmy* (pole obowiązkowe):</div>
							<div style="width:100%;"><input type="text" class="input" value="" name="nazwagenergo"></div>
							<div id='myform_nazwagenergo_errorloc' class="error_strings"></div>
							<div style="width:100%;font-size:12px; color:#7a4f67; text-align:left;">Imię i nazwisko* (pole obowiązkowe):</div>
							<div style="width:100%;"><input type="text" class="input" value="" name="namegenergo"></div>
							<div id='myform_namegenergo_errorloc' class="error_strings"></div>
							<div style="width:100%; font-size:12px; color:#7a4f67; text-align:left;">Telefon* (pole obowiązkowe):</div>
							<div style="width:100%;"><input type="text" class="input" value="" name="telgenergo"></div>
							<div id='myform_telgenergo_errorloc' class="error_strings"></div>
							<div style="width:100%; font-size:12px; color:#7a4f67; text-align:left;">E-mail* (pole obowiązkowe):</div>
							<div style="width:100%;"><input type="text" class="input" value="" name="emailgenergo"></div>
							<div id='myform_emailgenergo_errorloc' class="error_strings"></div>
							<div style="width:100%; font-size:12px; color:#7a4f67; text-align:left;">Temat:</div>
							<div style="width:100%;"><input type="text" class="input" value="" name="tematgenergo"></div>
							<div style="width:100%; font-size:12px; color:#7a4f67; text-align:left;"> Wiadomość:</div>
							<div style="width:400px; float:left;"><textarea name="textgenergo"></textarea></div>
							<div id="myform_errorloc" class="error_strings">
							 <input type="submit" value="Submit" />
							</form> 
							</div> 
							
							<script type="text/javascript">
							  var frmvalidator  = new Validator("myform");
							  frmvalidator.EnableOnPageErrorDisplay();
							  frmvalidator.EnableMsgsTogether();

							  frmvalidator.addValidation("nazwagenergo","req","Podaj nazwę firmy");

							  frmvalidator.addValidation("namegenergo","req","Podaj swoje imię i nazwisko");
							  frmvalidator.addValidation("namegenergo","alpha_s","Imię i nazwisko może składać się tylko z liter alfabetu");

							  frmvalidator.addValidation("emailgenergo","req", "Podaj swój e mail");
							  frmvalidator.addValidation("emailgenergo","email");

							  frmvalidator.addValidation("telgenergo","req", "Podaj swój numer telefonu");
							  frmvalidator.addValidation("telgenergo","numeric");
                             </script>
                             <script src="js/gen_validatorv4.js"></script>
<?php include_once "../parts/footer.php";
?>
						
