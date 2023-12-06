
<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>CRM Registro Funcionários</title>

 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/style.css" rel="stylesheet">
</head>
<body>

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
      </div>
      <div class="modal-body">
        Deseja realmente excluir este item?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Sim</button>
	<button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
      </div>
    </div>
  </div>
</div>

 <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">CRM Registro Funcionários</a>
   </div>
   
  </div>
 </nav>

 <div id="main" class="container-fluid">

 <!-- início da área para preencher com os dados do funcionário selecionado para visualização - NÃO FAZER ASSÍNCRONO-->
  <h3 class="page-header">José Carlos da Silva Santos</h3>
 
  
  <div class="row">
    <div class="col-md-4">
      <p><strong>Nome</strong></p>
  	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Endereço</strong></p>
  	  <p>Lorem ipsum dolor</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Formação</strong></p>
  	  <p>123.456.789-0</p>
    </div>

    <div class="col-md-4">
      <p><strong>Setor</strong></p>
  	  <p>In vel sollicitudin leo, id fermentum augue.</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Telefone do Setor</strong></p>
  	  <p>(00) 234-5678</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Celular Pessoal</strong></p>
  	  <p>Nullam ultrices elit ante.</p>
    </div>
	
    <div class="col-md-4">
      <p><strong>E-Mail</strong></p>
  	  <p>Integer finibus in ligula vitae aliquet.</p>
    </div>
	
	<div class="col-md-4">
      <p><strong>Salário</strong></p>
  	  <p>Jes</p>
    </div>
	
	
 </div>
 
 <hr />
 
 <!-- criação de links para editar e excluir -->
 <div id="actions" class="row">
   <div class="col-md-12">
     <a href="index.php" class="btn btn-primary">Fechar</a>
    
  <!-- ao clicar, excluir assíncronamente -->
	 <a  class="btn btn-default">Excluir</a>
   </div>
 </div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>