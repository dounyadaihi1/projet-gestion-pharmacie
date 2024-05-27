<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gestion_pharmacie";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Échec de la connexion à MySQL: " . $conn->connect_error);
    }

    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit();
        } else {
            echo "<p style='color: red;'>Mot de passe incorrect.</p>";
        }
    } else {
        echo "<p style='color: red;'>Cet email n'est pas enregistré.</p>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>connexion</title>
<style>
    body { font-family: Arial, sans-serif; background-color: black; background-image: url('lll.jpg'); background-size: cover; }
    .container { max-width: 400px; margin: 50px auto; padding: 20px; border-radius: 50px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); background-color: rgba(255, 255, 255, 0.8); }
    h2 { text-align: center; color: #333; }
    input[type="text"], input[type="password"], button { width: 100%; padding: 10px; margin-bottom: 15px; border-radius: 50px; }
    button { background-color: #007bff; color: #fff; cursor: pointer; }
    button:hover { background-color: #0056b3; }
    .logo { border-radius: 50%; width: 150px; height: 150px; }
    a { text-align: center; color: #007bff; }
    a:hover { text-decoration: underline; }
</style>
</head>
<body>
<div class="container">
    <center><img src="th (2).jpg" alt="Logo" class="logo"></center>
    <h2>gestion de pharmacie</h2>
    <form method="post" action="login.php">
    
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <center><button type="submit">Se connecter</button></center>
    </form>
    <center><a href="register.php">Pas encore de compte ? Inscription</a></center>
  
</div>
</body>
</html>

