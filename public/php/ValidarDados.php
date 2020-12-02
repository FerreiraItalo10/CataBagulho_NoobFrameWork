<?php

print_r($_POST);
echo "<br><br>";
var_dump($_POST);

    if(empty($_POST['nome']) || strlen($_POST['nome']) < 3)
    {
        // $nome = "Vazio".strlen($_POST['nome'])
        header('location:Cadastro.html?nome=erro'); 
    }

    else if (empty($_POST['cpf']) || strlen($_POST['cpf']) < 11 || strlen($_POST['cpf']) > 11)
    {
        header('location:Cadastro.html?cpf=erro'); 
    }

    else if (empty($_POST['sexo']))
    {
        header('location:Cadastro.html?sexo=erro'); 
    }

    else if (empty($_POST['DataNascimento']))
    {
        header('location:Cadastro.html?datadenascimento=erro'); 
    }

    else if (empty($_POST['email']))
    {
        header('location:Cadastro.html?email=erro');   
    }

    else if (empty($celular = $_POST['celular']) || strlen($_POST['celular']) < 11 || strlen($_POST['celular']) > 11)
    {
        header('location:Cadastro.html?celular=erro'); 
    }


    else if (empty($endereco = $_POST['end']))
    {
        header('location:Cadastro.html?endereco=erro'); 
    }

    else if (empty($_POST['num']))
    {
        header('location:Cadastro.html?email=erro'); 
    }

    else if (empty($_POST['cep']) || strlen($_POST['cep']) < 8 || strlen($_POST['cep']) > 8)
    {
        header('location:Cadastro.html?cep=erro'); 
    }

    else if (empty($_POST['bairro']))
    {
        header('location:Cadastro.html?bairro=erro'); 
    }

    else if (empty($_POST['cidade']))
    {
        header('location:Cadastro.html?cidade=erro'); 
    }

    else if (empty($_POST['uf']))
    {
        header('location:Cadastro.html?estado=erro'); 
    }


    else
    {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $sexo = $_POST['sexo'];
        $datanascimento = $_POST['DataNascimento'];
        $celular = $_POST['celular'];
        $cep = $_POST['cep'];
        $endereco = $_POST['end'];
        $numero = $_POST['num'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['uf'];
    }


echo "<br><br><b>Nome:</b> ".$nome."<br>";
echo "<b>E-mail:</b> ".$email."<br>";
echo "<b>CPF:</b> ".$cpf."<br>";
echo "<b>Sexp:</b> ".$sexo."<br>";
echo "<b>Data de Nascimento:</b> ".$datanascimento."<br>";
echo "<b>Celular:</b> ".$celular."<br>";
echo "<b>CEP:</b> ".$cep."<br>";
echo "<b>Endereço:</b> ".$endereco."<br>";
echo "<b>Número:</b> ".$numero."<br>";
echo "<b>Bairro:</b> ".$bairro."<br>";
echo "<b>Cidade:</b> ".$cidade."<br>";
echo "<b>Estado:</b> ".$estado."<br>";


echo "<br><br>";
print_r($_FILES);
echo "<br><br>";
var_dump($_FILES);

echo "<br><br><b>Nome do Arquivo:</b> ".$_FILES['arq']['name']."<br>";
echo "<b>Tipo do Arquivo:</b> ".$_FILES['arq']['type']."<br>";
echo "<b>Localização Temporária no Servidor:</b> ".$_FILES['arq']['tmp_name']."<br>";
echo "<b>Tamanho em bytes:</b> ".$_FILES['arq']['size']."<br>";
echo "<b>Código do erro no processo de upload:</b> ".$_FILES['arq']['error']."<br>";
echo "<br><br>";

$diretorio = "AtividadeFormularioUpload/";
$nomeArquivo = "x";

    if(move_uploaded_file($_FILES['arq']['tmp_name'],$diretorio.$nomeArquivo))
    {
        echo "Arquivo salvo com sucesso";
    };


?>