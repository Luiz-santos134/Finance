<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINANCE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/83da9facc2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilo/style.css">
    <link rel="icon" href="Assets/ImgLogoFinance.png">
</head>

<body>
    <header>
        <div class="logo">
            <img src="Assets/ImgLogoFinanceSemTexto.png" alt="img logo">
            <p>FINANCE</p>
        </div>
        <div class="perfil">
            <div class="nomeUser">
                <p>Luiz Cláudio</p>
            </div>
            <div class="fotoPerfil">
                <img src="img_perfil.jpg" alt="img perfil">
            </div>
        </div>
    </header>

    <aside>
        <div class="menu">
            <ul>
                <a href="index.html" class="menu-link" style="background-color: var(--cor-secundaria);">
                    <li><i class="fas fa-tachometer-alt"></i> Dashboard</li>
                </a>
                <a href="financas-pessoais.html" class="menu-link">
                    <li><i class="fas fa-user"></i> Finanças Pessoais</li>
                </a>
                <a href="financas-familia.html" class="menu-link">
                    <li><i class="fas fa-users"></i> Finanças da Família</li>
                </a>
                <a href="negocios.html" class="menu-link">
                    <li><i class="fas fa-briefcase"></i> Negócios</li>
                </a>
                <a href="investimentos.html" class="menu-link">
                    <li><i class="fas fa-chart-line"></i> Investimentos</li>
                </a>
                <a href="educacao-financeira.html" class="menu-link">
                    <li><i class="fas fa-graduation-cap"></i> Educação Financeira</li>
                </a>
                <a href="ferramentas.html" class="menu-link">
                    <li><i class="fas fa-tools"></i> Ferramentas</li>
                </a>
                <a href="conta.html" class="menu-link">
                    <li><i class="fas fa-user-circle"></i> Conta</li>
                </a>
            </ul>
        </div>
    </aside>

    <main>
        <h2 id="titulo">Dashboard</h2>

        <div class="container">
            <div class="infosGerais">
                <div class="visao1">
                    <div class="saldo">
                        <p>Saldo</p>
                        <span>$ 10.500</span>
                    </div>
                    <div class="infosVisao1">
                        <div class="receitas">
                            <p>Receitas</p>
                            <span>$ 10.500</span>
                        </div>
                        <div class="despesas">
                            <p>Despesas</p>
                            <span>$ 10.500</span>
                        </div>
                    </div>
                    <div class="graficoPizza">
                        <div id="grafico"></div>
                        <div id="grafico2"></div>
                    </div>
                </div>
                
                <div class="visao2">
                    <div class="container_visao2">
                        <canvas id="graficoRelatorios">
        
                        </canvas>
                    </div>
                </div>
            </div>

            <div class="visao3">
                <p>Alertas</p>
                <div class="container_visao3">
                    <div class="alerta">
                        <p>Você gastou 80% do orçamento de lazer</p>
                        <a href="">Ver detalhes</a>
                    </div>
                    <div class="alerta">
                        <p>Você gastou 80% do orçamento de lazer</p>
                        <a href="">Ver detalhes</a>
                    </div>
                    <div class="alerta">
                        <p>Você gastou 80% do orçamento de lazer</p>
                        <a href="">Ver detalhes</a>
                    </div>
                    <div class="alerta">
                        <p>Você gastou 80% do orçamento de lazer</p>
                        <a href="">Ver detalhes</a>
                    </div>
                    <div class="alerta">
                        <p>Você gastou 80% do orçamento de lazer</p>
                        <a href="">Ver detalhes</a>
                    </div>
                    <div class="alerta">
                        <p>Você gastou 80% do orçamento de lazer</p>
                        <a href="">Ver detalhes</a>
                    </div>
                </div>
                
            </div>
        </div>
    </main>

</body>
<script s