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
            $_SESSION['id'] = $result[0];

        }

        else{
            
            $query = mysqli_query($con, "SELECT * FROM usuario WHERE cpf = '$identity' AND senha = '$passwordCdf'");

        }

        
        
        if($count == 1){
                        # se passou significa que a pessoa inceriu o cnpj e não o cpf

                $result = mysqli_fetch_array($query);


                $_SESSION['usuario'] = $result[1];
                $ID =  $_SESSION['id'];


                $_SESSION['Pudim7w7'] = true;

                echo "<script>alert('$ID'); window.location.href='../HTML/empresa/home.php'</script>";
            }else {
                echo "<script> 
                        alert('não esta cadastrado'); 
                        window.location.href='../HTML/cadastro.html'
                      </script>";
            }
    }

?>
