<?php
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
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Compte créé avec succès !</p>";
    } else {
        echo "<p style='color: red;'>Erreur: " . $sql . "<br>" . $conn->error . "</p>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Inscription</title>
<style>
    body { font-family: Arial, sans-serif; background-color: #f1f1f1; background-image: url('lll.jpg'); background-size: cover; }
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
    <h2>Inscription</h2>
    <form method="post" action="register.php">
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <center><button type="submit">Créer un compte</button></center>
    </form>
    <center><a href="login.php">Déjà un compte ? Connexion</a></center>
    
</div>
</body>
</html>
