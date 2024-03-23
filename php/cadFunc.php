<?php

    //include = inclui o conteudo de um arquivo dentro de out
    include 'conexao.php'

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $aniversario = $_POST['aniversario'];
    $datainicio = $_POST['data'];

    $sql = ("INSERT INTO empresa(nome,senha,email,cpf,telefone,aniversario,datainicio)VALUES('$nome','$senha','$email','$cpf','$telefone','$aniversario','$datainicio')");
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_query($conn);
    if($rows>0){
        echo"<script>alert('Administrador Cadastrado!');window.location.href='https://localhost/barberia/cadastrar.php'<script>";
    }else{
        echo "ERRO AO AGENDAR"
    }
?>