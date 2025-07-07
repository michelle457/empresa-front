<?php
session_start();

if(!isset($_SESSION['usuario'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<style>
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #cb6cf4;
  color: #333;
  scroll-behavior: smooth;
}

header {
  background-color: #8800ff;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px 40px;
  flex-wrap: wrap;
}

.logo {
  font-size: 24px;
  font-weight: bold;
}

.navbar ul {
  list-style: none;
  display: flex;
  gap: 20px;
  margin: 0;
  padding: 0;
}

.navbar a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  transition: 0.3s;
}

.navbar a:hover {
  text-decoration: underline;
}

main {
  padding: 40px 20px;
  text-align: center;
}

section {
  margin-bottom: 60px;
}

.produtos {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
  max-width: 1200px;
  margin: 0 auto;
}

.produto {
  background-color: #fffefe;
  padding: 20px;
  border-radius: 12px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.produto img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 10px;
}

.produto h3 {
  margin: 10px 0 5px;
  color: #8800ff;
}

.produto p {
  margin: 5px 0 10px;
  font-weight: bold;
}

.comprar {
  background-color: #8800ff;
  color: black;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  cursor: pointer;
  transition: background 0.3s;
  font-size: 15px;
}

.comprar:hover {
  background-color: #6a00cc;
}

.sobre,
.contato {
  max-width: 700px;
  margin: 0 auto;
}

.sobre h2,
.contato h2 {
  color: #8800ff;
}
</style>
<body>
    <body>
  <header>
    <div class="logo">Shellyzs Meias 🧦</div>
    <nav class="navbar">
      <ul>
        <li><a href="#inicio">Início</a></li>
        <li><a href="#produtos">Produtos</a></li>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#contato">Contato</a></li>
        <li><a href="logout.php">Sair</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="bemvindo" id="inicio">
      <h2>Bem-vinda, <?php echo $_SESSION['usuario']; ?>! 💜</h2>
      <p>Veja nossas meias mais estilosas!</p>
    </section>

    <section class="produtos" id="produtos">
      <!-- Produtos (mantidos como estavam) -->
      <div class="produto">
        <img src="meias/kitty.jpeg" alt="Meia 1" />
        <h3>Meia Branca da Hello Kitty</h3>
        <p>R$ 17,99</p>
        <button class="comprar" onclick="comprar('Meia Branca da Hello Kitty')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/aranha.jpeg" alt="Meia 2" />
        <h3>Meia Preta do Homem Aranha</h3>
        <p>R$ 17,99</p>
        <button class="comprar" onclick="comprar('Meia Preta do Homem Aranha')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/Sonic.jpeg" alt="Meia 3" />
        <h3>Meia do Sonic</h3>
        <p>R$ 17,99</p>
        <button class="comprar" onclick="comprar('Meia do Sonic')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/mario.jpeg" alt="Meia 4" />
        <h3>Kit 3 pares do Mario</h3>
        <p>R$ 53,97</p>
        <button class="comprar" onclick="comprar('Kit 3 pares do Mario')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/south park.jpeg" alt="Meia 5" />
        <h3>Kit 2 pares de South Park</h3>
        <p>R$ 35,98</p>
        <button class="comprar" onclick="comprar('Kit 2 pares de South Park')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/akatsuki.jpeg" alt="Meia 6" />
        <h3>Meia do Itachi</h3>
        <p>R$ 20,90</p>
        <button class="comprar" onclick="comprar('Meia do Itachi')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/gojo.webp" alt="Meia 7" />
        <h3>Meia do Gojo</h3>
        <p>R$ 17,99</p>
        <button class="comprar" onclick="comprar('Meia do Gojo')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/Tokyo Ghoul.jpeg" alt="Meia 8" />
        <h3>Meia do Tokyo Ghoul</h3>
        <p>R$ 17,99</p>
        <button class="comprar" onclick="comprar('Meia do Tokyo Ghoul')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/sherek.jpeg" alt="Meia 9" />
        <h3>Meia do Shrek e do Burro</h3>
        <p>R$ 35,98</p>
        <button class="comprar" onclick="comprar('Meia do Shrek e do Burro')">Comprar</button>
      </div>
      <div class="produto">
        <img src="meias/et.jpeg" alt="Meia 10" />
        <h3>ET</h3>
        <p>R$ 17,99</p>
        <button class="comprar" onclick="comprar('Meia ET')">Comprar</button>
      </div>
    </section>

    <!-- SOBRE -->
    <section class="sobre" id="sobre">
      <h2>Sobre Nós</h2>
      <p>
        Somos a Shellyzs Meias, uma marca que nasceu pra trazer mais estilo, cor
        e conforto para os seus pés! Feitas com carinho, nossas meias são
        únicas assim como você 💜 Trazendo meias de personagens com um valor acessível.
      </p>
    </section>

    <!-- CONTATO -->
    <section class="contato" id="contato">
      <h2>Contato</h2>
      <p>📧 Email: contato@shellyzsmeias.com</p>
      <p>📱 WhatsApp: (41) 99999-9999</p>
      <p>📍 Local: Curitiba - PR</p>
    </section>
  </main>

  <script>
    function comprar(produto) {
      alert("Você comprou: " + produto + " 💜 Obrigada pela preferência!");
    }
  </script>
</body>

</html>
