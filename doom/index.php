<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shelly acessorios</title>
    <link rel="stylesheet" href="index.css">
    <style>
        body {
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: 'Lexend', sans-serif;

    background-image: url("my-melody2.jpg");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

}

form {
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    width: 300px;

    background-color: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);

    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);

    border: 1px solid rgba(255, 255, 255, 0.3);
}

form label {
    color: #e91e63;
    margin-bottom: 20px;
    font-size: 24px;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 5px;
    background-color: #ffc0cb;
    color: #000;
    font-size: 16px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #e91e63;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #d81b60;
}
</style>


</head>
<body>
<?php

// Configurações do banco de dados
$host = 'localhost';
$user = 'root'; // usuário padrão do XAMPP
$password = ''; // senha padrão do XAMPP (vazia)
$database = 'sistem-cd'; // substitua pelo nome do seu banco de dados

// Conectar ao banco de dados
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Criptografia de senha (apenas para exemplo/criação de usuários)
// echo password_hash(123456, PASSWORD_DEFAULT);

// Receber dados do forms
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// Acessar o IF quando o usuario clicar no botão de acesso do formulario
if (!empty($dados["Sendlogin"])) {
    // Preparar a consulta SQL
    $query_usuario = "SELECT id, senha FROM usuarios WHERE usuario = ? LIMIT 1";
    $stmt = $conn->prepare($query_usuario);
    $stmt->bind_param("s", $dados["usuario"]);
    $stmt->execute();
    $resultado = $stmt->get_result();
    
    if ($resultado->num_rows == 1) {
        // Usuário encontrado, verificar senha
        $row_usuario = $resultado->fetch_assoc();
        if (md5($dados["senha"], $row_usuario['senha'])) {
            // Senha correta - iniciar sessão e redirecionar
            session_start();
            $_SESSION['id'] = $row_usuario['id'];
            $_SESSION['usuario'] = $dados["usuario"];
            
            header("Location: dashboard.php"); // redireciona para página restrita
            exit();
        } else {
            echo "<p style='color: red'>Erro: Senha incorreta!</p>";
        }
    } else {
        echo "<p style='color: red'>Erro: Usuário não encontrado!</p>";
    }
}

?>


<!-- Inicio do formulario -->
<form method="POST" action="">


<label>Usuário: </label>
<input type="text" name="usuario" placeholder="digite o usuário" required><br><br>


<label>Senha: </label>
<input type="password" name="senha_usuario" placeholder="digite a senha" required><br><br>


<input type="submit" name="Sendlogin" value="Acessar">
</form>
<!-- fim do formulario -->

</body>
</html>


