<?php
    include("./conexao.php");
    $busca = mysqli_query($con, "SELECT * FROM funcionarios");
    $res = "";
    if(mysqli_num_rows($busca) == 0) 
    {
        $res= $res.
        "<div class=\"respostaElse\">
            <h1>Ao que parece você não possui anúncios de vagas</h1>
            <h3>Clique <a href=\"../../php/criarVagas.php\">aqui</a> para iniciar sua jornada!</h3>
        </div>";
    }
    else{
        while($resultado = mysqli_fetch_row($busca)){

                $res = $res. 
                    "<tr>
                        <td>".$resultado[0]."</td>
                        <td>".$resultado[1]."s</td>
                        <td>".$resultado[3]."</td>
                        <td>".$resultado[4]."</td>
                        <td class='actions'>
                            <a class='btn btn-success btn-xs' href='visualizar_pesquisa.php?id=".$resultado[0]."'>Visualizar</a>
                            <!-- ao clicar, excluir assíncronamente -->
                            <a class='btn btn-danger btn-xs' onclick=\"excluir(".$resultado[0].")\" >Excluir</a>
                        </td>
			        </tr>";            
        }
    }

    echo $res;
?>