<?php
    // *--- Session ---*
        session_start();

    include('./conexao.php');
    if (!empty($_POST)) {
       
    
        $identity = $_POST['identity'];
        $password = $_POST['password'];
        $category = $_POST['category'];
        
        $passwordCdf = base64_encode($password);
        
       

        
           
        $query = mysqli_query($con, "SELECT * FROM empresa WHERE cnpj = '$identity' AND senha = '$passwordCdf'");
        $result = mysqli_fetch_array($query);
        

        $count = mysqli_num_rows($query);

        if ($count == 1) {
            $_SESSION['logo'] = $result[5];
            $_SESSION['cat'] = "emp";
        }

        else{
            
            $query = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$identity' AND senha = '$passwordCdf'");

        }

        
        
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

    if (isset($_SESSION)) {
        # code...
    }

?>
