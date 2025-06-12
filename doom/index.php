<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
 
 //criptografiia de senha
 echo password_hash(123456, PASSWORD_DEFAULT);



 //receber dados do formulario
 $dados = filter_input_array(INPUT_POST,FILTER_DEFAULT);

 //Acessar o IF quando o user clicar no botão de acessar o formulario
 if(!empty($dados['Sendlogin'])){
    var_dump($dados);
 }
?> 


<!--- inicio do forms  -->
<form method="POST" action="">

<label>Usuário</label>
<input type="text" name="usuario" placeholder="Digite o usuario">
<br><br>
<label>Senha</label>
<input type="password" name="senha" placeholder="Digite a senha">
 <br><br>
<input type="submit" name="Sendlogin" value="acessar">
<br><br>

</form>
<!---fim fo formulário--->
<?

//configuração do banco
$host= 'localhost';
$user= 'root'; //user pabrão
$password=''; //senha padrão (vazio)
$database='nome_do_banco'; //substituir pelo seu banco

//conectar ao banco
$conn= new mysqli














</body>
</html>
