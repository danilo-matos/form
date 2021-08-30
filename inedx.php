<?php

include('config.php'); 

Mysql::conectar();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>


    <div class="form_cd">
        <?php
        if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            if($nome == ''){
                Form::alert('erro','Preencha o Nome');
            }else if($email == ''){
                Form::alert('erro', 'Preencha o E-mail');
            }else if($senha == ''){
                Form::alert('erro', 'Preencha a Senha');
            }else{
                Form::cadastrar($nome,$email,$senha);
                Form::alert('sucesso', 'Usuario'.$nome. 'Cadasrado com sucesso' );
                 return true;
            } 
        }
         
        
        ?>
        <form method="POST">
            <div><input type="text" name="nome" placeholder="Nome"></div>
            <div><input type="text" name="email" placeholder="E-mail"></div>
            <div><input type="text" name="senha" placeholder="Senha"></div>
            <div><input type="submit" name="acao" value="Cadastrar"></div>
            <div><input type="hidden" name="form" value="f_form"></div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>