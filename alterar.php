<?php 
include("database.php"); 
session_start();

$user_id = $_SESSION["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Alterar dados</h3>
    <div class="forms">
        <form action="alterar.php" method="post">
            <h4>Nome:</h4>
            <input type="text" name="name" placeholder="Digite seu nome" required>

            <h4>Sobrenome:</h4>
            <input type="text" name="surname" placeholder="Digite seu sobrenome" required>

            <h4>Email:</h4>
            <input type="text" name="email" placeholder="Digite seu email" required>

            <h4>Senha:</h4>
            <input type="password" name="password" placeholder="Digite sua nova senha" required><br>

            <input type="submit" name="submit" value="Alterar"><br>

            <a href="login.php">Voltar para a página de login</a>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $nome = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE users 
            SET user = '$nome', surname = '$surname', email = '$email', password = '$hash' 
            WHERE id = '$user_id'";

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_affected_rows($conn) > 0) {
        echo "Alteração realizada com sucesso!";
    } else {
        echo "Nenhum dado alterado ou usuário não encontrado.";
    }

    mysqli_close($conn);
}
?>
