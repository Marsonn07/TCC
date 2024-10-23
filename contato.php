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
            <h1>Contato</h1>
        </div>
        <br>
        <div class="menu">
            <nav>
                <ul>
                    <li><button class="botao" onclick="scrollParaMenu()" ><a href="menu.html">Menu</a></button></li>
                    <li><button class="botao" onclick="scrollParaJogos()"><a href="jogos.html">Jogos</a></button></li>
                    <li><button class="botao" onclick="scrollParaSobre()"><a href="sobre.html">Sobre</a></button></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main>
        <section id="contato">
            <h2>Contato</h2>
            <form action="envia-formulario.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
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

