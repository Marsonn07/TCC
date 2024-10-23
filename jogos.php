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
        <div class="Nome">
            <h1>Jogos</h1>
        </div>
        <br>
        <div class="menu">
            <nav>
                <ul>
                    <li><button class="botao" onclick="scrollParaMenu()" ><a href="menu.html">Menu</a></button></li>
                    <li><button class="botao" onclick="scrollParaSobre()"><a href="sobre.html">Sobre</a></button></li>
                    <li><button class="botao" onclick="scrollParaContato()"><a href="contato.html">Contato</a></button></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section id="Jogos">
            <h2>jogos</h2>
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