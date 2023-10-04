<?php
    // *--- Session ---*
        session_start();

    include('./conexao.php');
    if (!empty($_POST)) {
       
    
        $identity = $_POST['identity'];
        $password = $_POST['password'];
        $category = $_POST['category'];
        
        $passwordCdf = base64_encode($password);
        
       

        if ($category == "empresa") {
           
            $query = mysqli_query($con, "SELECT * FROM empresa WHERE cnpj = '$identity' AND senha = '$passwordCdf'");

        }
        else if($category == "desempregado"){
            
            $query = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$identity' AND senha = '$passwordCdf'");

        }

        
        $count = mysqli_num_rows($query);

            if($count == 1){
                        # se passou significa que a pessoa inceriu o cnpj e não o cpf

                $result = mysqli_fetch_array($query);
                $_SESSION['usuario'] = $result[1];

                $_SESSION['Pudim7w7'] = true;

                echo "<script> window.location.href='../HTML/empresa.php'</script>";
            }else {
                echo "<script> 
                        alert('não esta cadastrado'); 
                        window.location.href='../HTML/cadastro.html'
                      </script>";
            }
    }

?>
