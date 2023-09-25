<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<?php

function performSqlInjection($username, $password) 
{

    $query = "SELECT * FROM usuarios WHERE usuario = '$username' AND senha = '$password'";
    return $query;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $injectionQuery = performSqlInjection($username, $password);

    $db = new SQLite3('usuarios.db3');

    $result = $db->query($injectionQuery);

    if ($result->fetchArray()) {
        echo "Login bem-sucedido! Bem-vindo, $username.";
    } else {
        echo "Usuário e/ou senha inválidos.";
    }

    $db->close();
}
?>

</body>
</html>