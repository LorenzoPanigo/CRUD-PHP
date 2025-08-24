<?php include("database.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <h3>Formulário de cadastro</h3>
    <div class = "forms">
        <form action = "index.php" method = "post">
            <h4>Nome:</h4>
            <input type = "text" name = "username" placeholder = "Digite seu nome"> <br>
            <h4>Sobrenome:</h4>
            <input type = "text" name = "surname" placeholder = "Digite seu sobrenome"> <br>
            <h4>Email:</h4>
            <input type = "text" name = "email" placeholder = "Digite seu email"> <br>
            <h4>Senha:</h4>
            <input type = "password" name = "password" placeholder = "Click here to enter your password"> <br>
            <input type = "submit" name = "submit"><br>
        </form>
        <a href = "login.php">Fazer login</a>
    </div><br><br>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        $user = $_POST["username"];
        $surname = $_POST["surname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user, surname, email, password) VALUES ('$user', '$surname', '$email', '$hash')";

        mysqli_query($conn, $sql);
        mysqli_close($conn);
        echo "Cadastrado!";
    }
?>
