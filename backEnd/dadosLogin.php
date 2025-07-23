<?php

    include_once('./app/database/bd_conexao.php');
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //confirmando dados 
    function santizandoDados(){
        
        if(isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['nome'])){
            $nomeUser = preg_replace("/[^a-zA-Z0-9]/", " ", $_POST['nome']);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            return ['email'=>$email , 'senha'=>$senha, 'nome'=>$nomeUser];
        }

        return null;
    }
    $dados = santizandoDados();
    if($dados){
        $stmt = $conn->prepare("INSERT INTO users(nome, email, senha) VALUES(?,?,?)");
        $stmt->bindParam(1, $dados['nome']);
        $stmt->bindParam(2, $dados['email']);
        $stmt->bindParam(3, $dados['senha']);

        if($stmt->execute()){
            echo "Usuário cadastrado !";
        }else{
            echo "Erro ao cadastrar !";
        }
    
    }else{
        echo "Dados invalidos";
    }
   
?>