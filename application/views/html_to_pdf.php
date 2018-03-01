<!DOCTYPE html>
<head>
 <meta charset="utf-8">
 <title>Welcome to CodeIgniter</title>
</head>
<body>
 
<div id="container">

 <p>CONSTRUTORA ELOS ENGENHARIA LTDA</p>

 <p>OBRA:_________________________</p> <br>

 <p>Referente: Descontos em Folha de Pagamento Mensal</p> <br>

 <p>Eu, <?= $funcionario->nome;?></p>
 <p>Mat.<?= $funcionario->matricula;?></p><br>

 <p>Na função de: <?= $funcionario->funcao;?></p>
 
 <div id="body">
 <p>The page you are looking at is being generated dynamically by CodeIgniter.</p><br>

  <p><?= $questionario->conQualquer;?></p>

  <p><?= $questionario->conAssociativa;?></p>

  <p><?= $questionario->conSindicalAnual;?></p>

  <p><?= $questionario->conAssistencialMensal;?></p><br>

 <p>If you would like to edit this page you'll find it located at:</p>
application/views/welcome_message.php
 <p>The corresponding controller for this page is found at:</p>
application/controllers/Welcome.php
 <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
 </div>
 
</div>
 
</body>
</html>