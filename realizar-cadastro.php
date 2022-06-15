<?php 

 require_once './conexao.php';

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];


   
     if($nome == ""){
     echo 'Preencha o campo nome';
        exit();
      }
          if($email == ""){
          echo 'Preencha o campo email';
          exit();
      }
       if($senha == ""){
         echo 'Preencha o campo senha';
          exit();
        
      }

       if($senha != $_POST ['confirmar-senha']){
          echo 'As senhas não coincidem';
          exit();
      }

  $res = $pdo->query("SELECT * FROM usuario where nome='$_POST[nome]'"); 
  $dados = $res->fetchAll(PDO::FETCH_ASSOC);
          if(count($dados) == 0){
              $sql = ("INSERT into usuario (nome,senha,email) values (:nome,:senha,:email)");
              $res = $pdo->prepare($sql);
                  $res->bindValue(":nome", $nome);
                  $res->bindValue(":senha", $senha);
                  $res->bindValue(":email", $email);
                  }
 ?>