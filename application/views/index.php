

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>

	<div class="container">
		
		<form action="<?= base_url("index.php/Funcionario_controller/salvarFormulario")?>" method="post">
		  <div class="form-group">
		    <label for="inputNome">Nome Completo</label>
		    <input type="text" class="form-control" name="nome" id="inputNome" aria-describedby="emailHelp" required placeholder="Coloque seu nome completo">
		    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>

		  <div class="form-group">
		    <label for="inputMatricula">Matrícula</label>
		    <input type="text" class="form-control" name="matricula" id="inputMatricula" aria-describedby="matriculaHelp" required placeholder="Digite sua matricula">
		    <small id="matriculaHelp" class="form-text text-muted">Digite sua matrícula da forma exata em que ela se apresenta</small>
		  </div>

		  <div class="form-group">
		    <label for="inputFuncao">Função</label>
		    <input type="text" class="form-control" name="funcao" id="inputFuncao" aria-describedby="matriculaHelp" required placeholder="Digite aqui sua função">
		    <small id="matriculaHelp" class="form-text text-muted">Digite sua matrícula da forma exata em que ela se apresenta</small>
		  </div>
		  <div class="form-group">Contribuição sindical anual      
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conSindicalAnual" id="inlineRadio1" value="Sim">
			  <label class="form-check-label" for="inlineRadio1">SIM</label>
		  </div>
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conSindicalAnual" id="inlineRadio2" value="Não">
			  <label class="form-check-label" for="inlineRadio2">NÃO</label>
		  </div>
		</div>

		  <div class="form-group">Contribuição sindical anual      
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conAssistenciaMensal" id="inlineRadio3" value="Sim">
			  <label class="form-check-label" for="inlineRadio3">SIM</label>
		  </div>
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conAssistenciaMensal" id="inlineRadio4" value="Não">
			  <label class="form-check-label" for="inlineRadio4">NÃO</label>
		  </div>
		</div>

		  <div class="form-group">Contribuição sindical anual      
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conAssociativa" id="inlineRadio5" value="Sim">
			  <label class="form-check-label" for="inlineRadio5">SIM</label>
		  </div>
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conAssociativa" id="inlineRadio6" value="Não">
			  <label class="form-check-label" for="inlineRadio6">NÃO</label>
		  </div>
		</div>

		<div class="form-group">Contribuição sindical anual      
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conQualquer" id="inlineRadio7" value="Sim">
			  <label class="form-check-label" for="inlineRadio7">SIM</label>
		  </div>
		  <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="conQualquer" id="inlineRadio8" value="Não">
			  <label class="form-check-label" for="inlineRadio8">NÃO</label>
		  </div>
		</div>
		  

		  <button type="submit" class="btn btn-primary">Submeter formulário</button>
		</form>

	</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>