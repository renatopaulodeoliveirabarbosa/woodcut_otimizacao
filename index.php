<?php require_once "header.inc.php"; ?>

<div class="container">
	<form method="POST" action="calcular.php" class="form-horizontal">
	<fieldset>


	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="inputs">Medidas de corte disponíveis (Inserir uma por linha e separar dimensões utilizando '.')</label>
	  <div class="col-md-4">                     
		<textarea rows='6' class="form-control" id="inputs" name="inputs">100.50</textarea>
	  </div>
	</div>

	<!-- Textarea -->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="outputs">Medidas a serem cortadas (Inserir uma por linha e separar dimensões utilizando '.')</label>
	  <div class="col-md-4">                     
		<textarea rows='6' class="form-control" id="outputs" name="outputs">100.50</textarea>
	  </div>
	</div>

	<!-- Button -->
	<div class="form-group">
	  <div class="col-md-4">
		<button type="submit" id="submit" name="submit" class="btn btn-success">Calcular</button>
	  </div>
	</div>

	</fieldset>
	</form>
 
	
</div>
<?php require_once "footer.inc.php"; ?>