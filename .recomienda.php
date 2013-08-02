<?php if (!$_POST){ ?>
	<form id="recomienda" method="post">
		<fieldset>
			<section id="recomiendaCajas">
				<input type="text" name="recomiendaN1" id="recomiendaN1" placeholder="tu nombre" required></td>
				<input type="mail" name="recomiendaE1" id="recomiendaE1" placeholder="tu email" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required></td>
				<input type="text" name="recomiendaN2" id="recomiendaN2" placeholder="nombre de tu amigo" required></td>
				<input type="mail" name="recomiendaE2" id="recomiendaE2" placeholder="email de tu amigo" pattern="^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" required></td>
			
			</section>
			<section id="recomiendaEnvia"><input name="Enviar" type="submit" class="botonComparte" id="button" value="&nbsp;"/></section>
		</fieldset>
	</form>
	<?php }
		else { 
			require_once('.enviar.php');
	?>
<?php }//fin else
?>