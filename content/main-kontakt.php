								<script src="js/gen_validatorv4.js"></script>

<div id="main">
							<div id="main_1_2">
							<h1>Kontakt</h1>
							<div id="main_1_half">
							<h2>Biuro</h2>
							<p></p>
							</div> 
							<!--end main_1_half -->
							<div id="main_2_half">
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
							<input type="submit" value="Wyślij" class="submit"/>
							</form> 
							</div> 
							
							<script type="text/javascript">
							  var frmvalidator  = new Validator("myform");
							  frmvalidator.EnableOnPageErrorDisplay();
							  frmvalidator.EnableMsgsTogether();

							  frmvalidator.addValidation("nazwagenergo","req","Podaj nazwę firmy");

							  frmvalidator.addValidation("namegenergo","req","Podaj swoje imię i nazwisko");
							  frmvalidator.addValidation("namegenergo","alpha_s","Imię i nazwisko może składać się tylko z liter alfabetu");

							  frmvalidator.addValidation("emailgenergo","req", "Podaj swój email");
							  frmvalidator.addValidation("emailgenergo","email", "Niepoprawnie wprowadzony adres email");

							  frmvalidator.addValidation("telgenergo","req", "Podaj swój numer telefonu");
							  frmvalidator.addValidation("telgenergo","numeric", "Numer telefonu może składać się tylko z cyfr");
                             </script>
							
							</div> 
							<!--end main_2_half -->
						de36ad150!2sGu%C5%BAlin+41!5e0!3m2!1sen!2spl!4v1402782633037" width="100%" height="300" frameborder="0" style="border:0"></iframe></p>
							</div> 

							<!--end main_1_2 -->

							