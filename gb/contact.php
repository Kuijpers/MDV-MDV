<?php
	
	$lang	=	"gb";

include ('../templates/header.html');
include ('../templates/topmenu.html');
include ('../templates/toplogo.html');
?>

        <div class="body_left">
        	<h3>Maaike de Vries Photography</h3>
			t.a.v. Maaike de Vries
            <br />
			Postbus 3 
            <br />
			7848 ZG Schoonoord	
            <br />
            <p />
            +316-47870911
            <br />
            <p />
Mocht u geen gehoor hebben, kunt u een boodschap achter laten op de voicemail of een email sturen. Wilt u zo snel mogelijk antwoord op uw vraag? Vul dan hieronder het contact formulier in, u zult dan z.s.m. een uitgebreid antwoord ontvangen op uw vraag. 
			<p />
        
        
        
        	<?php include ('../includes/contact_script.php');?>
			<table>
            	<tr>
                	<td>
                    	Naam:
                    </td>
                    <td>
                    	<input name="1naam" type="text" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	Onderwerp:
                    </td>
                	<td>
                    	<select name="1onderwerp">
                        	<option>Maak uw keuze</option>
                        	<option value="Informatie">Informatie </option>
                            <option value="Boeking">Boeken reportage</option>
                            <option value="Zoek">Zoek actie aanmelding</option>
                        </select>
                    </td>
                </tr>
                <tr>
                	<td>
                    	Email adres:
                    </td>
                	<td>
                    	<input name="1email" type="text" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	Woonplaats:
                    </td>
                    <td>
                    	<input name="1woonplaats" type="text" />
                    </td>
                </tr>
                <tr>
                	<td>
                    	Telefoonnummer:
                    </td>
                    <td>
                    	<input name="1tel" type="text" />
                    </td>
                </tr>
            	<tr>
                	<td>
                    	Bericht:
                    </td>
                </tr>
                <tr>
                	<td colspan="2">
                    	<textarea name="1bericht" cols="30" rows="8"></textarea>
                    </td>
                </tr>
            	<tr>
                	<td colspan="2">
                    	Alle velden dienen ingevuld te worden.
                    </td>
                </tr>
            	<tr>
                	<td>
                    	<input type="submit" value="Verzenden" />
                    </td>
                    <td>
                    	<input value="Verwijder de gegevens" type="reset" />
                    </td>
                </tr>
            </table>



        </div>


<?php
include ('../templates/bodyright.html');
include ('../templates/footer.html');
?>