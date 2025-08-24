<?php include("database.php");
session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <h3>Formulário de Login</h3>
    <div class="forms">
        <form action="login.php" method="post">
            <h4>Email:</h4>
            <input type="text" name="email" placeholder="Digite seu email">

            <h4>Senha:</h4>
            <input type="password" name="password" placeholder="Digite sua senha"> <br>

            <input type="submit" name="submit" value="Login"><br>

            <a href="index.php">Voltar para a página de cadastro</a>
            <a href="alterar.php">Alterar dados</a>
            <a href="apagar.php">Apagar minha conta</a>
        </form>
    </div>
</body>
</html>

<?php
    if (isset($_POST["submit"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hash = $row['password'];

            if (password_verify($password, $hash)) {
                echo "Login realizado com sucesso!";
            } else {
                echo "Senha incorreta.";
            }
        } else {
            echo "Usuário não encontrado.";
        }

        $_SESSION["id"] = $row["id"];

        mysqli_close($conn);
    }
?>