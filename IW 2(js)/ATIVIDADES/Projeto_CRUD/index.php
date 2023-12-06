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
<body onload="mostrar()">

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

 <div id="main" class="container-fluid" style="margin-top: 50px">
 
 	<div id="top" class="row">
		<div class="col-sm-3">
			<h2>Funcionários</h2>
		</div>
		<div class="col-sm-6">
		
	<!-- implementar busca com filtro pelo nome -->
			
			<div class="input-group h2">
			<!-- input para acrescentar método de busca assíncrona por digitação de letra -->
				<input name="busca" class="form-control" id="search" type="text" placeholder="Pesquisar Itens" onChange="filtro()">
			<!-- fim input -->	
			<span class="input-group-btn">

			<!-- input para acrescentar método de busca assíncrona por clique -->
					<input class="btn btn-primary" type="submit" value="Buscar">
			<!-- fim input -->	
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			
			</div>
			
	
		</div>
		<div class="col-sm-3">
			<a href="add.html" class="btn btn-primary pull-right h2">Cadastrar Novo</a>
		</div>
	</div> 
 
 	<hr />
 	<div id="list" class="row">
	
	<div class="table-responsive col-md-12">
		<table class="table table-striped" cellspacing="0" cellpadding="0">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>CPF</th>
					<th>Setor</th>
					<th class="actions">Ações</th>
				</tr>
			</thead>
	<!-- tabela: área editável. Exibir aqui todos os cadastrados no banco com a função assíncrona-->
			<tbody id="tabelaExibir">
			
				
	<!-- tabela: fim da área editável -->
				
			</tbody>
		</table>
	</div>
	
	</div> 

 </div> 



 <script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script>
	function mostrar()
	{
		var xhr;
        var confirmar= "null=null";

        if (window.XMLHttpRequest) { // Mozilla, Safari, ...

            xhr = new XMLHttpRequest();

        } else if (window.ActiveXObject) { // IE 8 and older

            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }


        xhr.open("POST", "./mostrar.php", true); 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
        xhr.send(confirmar);  
        xhr.onreadystatechange = display_data;

		function display_data() {

			if (xhr.readyState == 4) {

				if (xhr.status == 200) {

					
						items = xhr.responseText;
					
						document.getElementById('tabelaExibir').innerHTML = items ; 
							
					

				} else {

					alert('There was a problem with the request.');

				}
			}
		}
	}

	function excluir(id)
	{
		var xhr;
        var confirmar= "id="+id;

        if (window.XMLHttpRequest) { // Mozilla, Safari, ...

            xhr = new XMLHttpRequest();

        } else if (window.ActiveXObject) { // IE 8 and older

            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }


        xhr.open("POST", "./excluir.php", true); 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
        xhr.send(confirmar);  
        xhr.onreadystatechange = display_data;

		function display_data() {

			if (xhr.readyState == 4) {

				if (xhr.status == 200) {

					
						items = xhr.responseText;
					
						if(items == "1")
						{
							alert("deletado com sucesso");
							window.location.reload();
						}
						else{
							alert("erro ao deletar!");
						}
							
					

				} else {

					alert('There was a problem with the request.');

				}
			}
		}
	}
	filtro(dados)
	{
		var xhr;
        var confirmar= "dados="+document.getElementById("search").value;

        if (window.XMLHttpRequest) { // Mozilla, Safari, ...

            xhr = new XMLHttpRequest();

        } else if (window.ActiveXObject) { // IE 8 and older

            xhr = new ActiveXObject("Microsoft.XMLHTTP");
        }


        xhr.open("POST", "./filtro.php", true); 
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");                  
        xhr.send(confirmar);  
        xhr.onreadystatechange = display_data;

		function display_data() {

			function display_data() {

				if (xhr.readyState == 4) {

					if (xhr.status == 200) {

						
							items = xhr.responseText;
						
							document.getElementById('tabelaExibir').innerHTML = items ; 								
						

					} else {

						alert('There was a problem with the request.');

					}
				}
			}
		}
	}
 </script>
</body>
</html>