<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Musicando</title>
</head>
<body>
   
    <header>
        <a class="logo"><img src="assets\logoMusicando.png" alt="Logo Musicando" class="logo-img"></a>
        <div class="Nome">
            <h1>Bem-vindo ao Musicando!</h1>
        </div>
        <br>
        <div class="menu">
            
            <nav>
                <ul>
                    <li><button class="botao" onclick="scrollParaJogos()"><a href="jogos.php">Jogos</a></button></li>
                    <li><button class="botao" onclick="scrollParaSobre()"><a href="sobre.php">Sobre</a></button></li>
                    <li><button class="botao" onclick="scrollParaContato()"><a href="contato.php">Contato</a></button></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        
        <section id="Jogos">
            <h2><a href="jogos.php">Jogos</a></h2>
            <p>...</p>
        </section>

        <section id="sobre">
            <h2><a href="sobre.php">Sobre</a></h2>
            <p>...</p>
        </section>
        
        <section id="contato">
            <h2><a href="contato.php">Contato</a></h2>
            <p>...</p>        
        </section>
    </main>

    <footer>
        <p>Todos os direitos reservados @ 2024 | FEMA</p>
    </footer>

    <script>
        function scrollParaSobre() {
            document.getElementById('sobre').scrollIntoView({ behavior: 'smooth' });
        }
    </script>
</body>
</html>
