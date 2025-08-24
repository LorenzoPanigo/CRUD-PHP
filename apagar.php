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
    <title>Apagar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h3>Apagar usuário</h3>
    <div class="forms">
        <form action="apagar.php" method="post">
            <h4>Email:</h4>
            <input type="text" name="email" placeholder="Digite seu email" required>

            <h4>Senha:</h4>
            <input type="password" name="password" placeholder="Digite sua senha" required><br>

            <input type="submit" name="submit" value="Apagar"><br>

            <a href="login.php">Login</a>
        </form>
    </div>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email = '$email';";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $delete_sql = "DELETE FROM users WHERE id = ".$row['id'];
            mysqli_query($conn, $delete_sql);
            echo "Usuário apagado com sucesso!";
            session_destroy();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Email não encontrado.";
    }

    mysqli_close($conn);
}
?>
