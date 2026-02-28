<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finance Login</title>
    <link rel="icon" href="Assets/ImgLogoFinance.png">
    <script src="https://kit.fontawesome.com/83da9facc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo/sistema_sessao.css">
</head>
<body>
    <img src="Assets/fundoPreto.png" alt="">
    <main>
        <div class="container">
            <div class="cadastrar_container">
                <span id="span_email">Email</span>
                <span id="span_senha">Senha</span>

                <h2>Não possui uma conta?</h2>
                <p>Crie a sua agora</p>
                <a href="cadastro.php">Criar Conta</a>
            </div>
            <div class="formulario_login">
                <h1 id="h1_login">BEM-VINDO DE VOLTA</h1>
                <form action="./Configs/teste_sessao.php" method="POST">
                    <label>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </label>

                    <label>
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" required>
                    </label>

                    <label>
                        <button type="submit" name="submit">Entrar</button>
                    </label>
                </form>
            </div>
        </div>
    </main>
</body>
</html>