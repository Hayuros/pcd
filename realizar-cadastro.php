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

     $res = $pdo->query("SELECT * FROM usuario where nome = '$_POST[nome]'"); 
      $dados = $res->fetchAll(PDO::FETCH_ASSOC);
      if(@count($dados) == 0){

	$res = $pdo->prepare("INSERT into usuario (nome, email, senha, Cliente ) values (:nome, :email, :senha,  :Cliente)");
	$res->bindValue(":nome", $nome);
	$res->bindValue(":email", $email);
	$res->bindValue(":senha", $senha);
	$res->bindValue(":status", 'Cliente');

	$res->execute();


	$res = $pdo->prepare("INSERT into clientes (nome, email) values (:nome, :email)");
	$res->bindValue(":nome", $nome);
	$res->bindValue(":email", $email);

	
	$res->execute();


	$res = $pdo->query("SELECT * FROM emails where email = '$email'"); 
	$dados = $res->fetchAll(PDO::FETCH_ASSOC);
	if(@count($dados) == 0){
	$res = $pdo->prepare("INSERT into emails (nome, email, ativo) values (:nome, :email, :ativo)");
	$res->bindValue(":nome", $nome);
	$res->bindValue(":email", $email);
	$res->bindValue(":ativo", "Sim");
	$res->execute();
}


	echo 'Cadastrado com Sucesso!';
}else{
	echo 'nome já Cadastrado!';
}





    //  try {
    //     $conn = new PDO("mysql:host=$host;dbname=$dbname",  $username, $password);
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully";
    //   } catch(PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    //   }



?>