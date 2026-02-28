<?php

if(isset($_POST['submit']))
{
    include_once('./configs/config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $resultado = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Cadastro</title>
    <link rel="icon" href="Assets/ImgLogoFinance.png">
    <script src="https://kit.fontawesome.com/83da9facc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo/sistema_sessao.css">
</head>
<body>
    <img src="Assets/fundoFrame.jpg">
    <main>
        <div class="container">
            <div class="entrar_container">
                <span id="span_nome">Nome</span>
                <span id="span_email">Email</span>
                <span id="span_senha">Senha</span>

                <h2>Já tem uma conta?</h2>
                <p>Acesse a sua conta agora</p>
                <a href="login.php">Entrar</a>
            </div>
            <div class="formulario_cadastro">
                <h1>CRIE A SUA CONTA</h1>
                <form action="cadastro.php" method="POST">
                    <label>
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nome Completo" name="nome" required>
                    </label>
                    
                    <label>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </label>

                    <label>
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" required>
                    </label>

                    <label>
                        <button type="submit" name="submit">Cadastrar</button>
                    </label>
                </form>
            </div>
        </div>
    </main>
</body>
</html>