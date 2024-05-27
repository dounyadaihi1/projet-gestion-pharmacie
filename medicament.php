<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des médicaments</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-image: url('lll.jpg') ;
            background-size: cover;
            background-position: center;
            text-align: center;
            padding-top: 400px;
        }

        h2 {
            margin-bottom: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        table th {
            background-color: #f2f2f2;
        }

        table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #form-container {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto; /* Center the form */
            background-color: #fff;
        }

        #form-container input[type="text"],
        #form-container input[type="number"],
        #form-container button {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        #form-container button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        #form-container button:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<table id="medicaments-table">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"></form>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom du médicament</th>
            <th>Description</th>
            <th>Prix</th>
            <th>QuantiteStock</th>
        </tr>
    </thead>
    <tbody id="medicaments-body">
        <!-- Les données seront ajoutées ici dynamiquement via JavaScript -->
    </tbody>
</table>
<div id="form-container">
    <h2>Ajouter un nouveau médicament</h2>
    <input type="text" id="Nom" placeholder="Nom du médicament">
    <input type="text" id="Description" placeholder="Description">
    <input type="number" id="Prix" placeholder="Prix">
    <input type="number" id="QuantiteStock" placeholder="Quantité en stock">
    <button  herf="achat.php"onclick="ajouterMedicament()">Ajouter</button>
</div>

<script>
   // Fonction pour ajouter un nouveau médicament
function ajouterMedicament() {
    var nom = document.getElementById("Nom").value;
    var description = document.getElementById("Description").value;
    var prix = parseFloat(document.getElementById("Prix").value);
    var quantite = parseInt(document.getElementById("QuantiteStock").value);

    // Vérification de la validité des données saisies
    if (nom && description && !isNaN(prix) && !isNaN(quantite)) {
        var tbody = document.getElementById("medicaments-body");
        var newRow = tbody.insertRow();
        newRow.innerHTML = "<td>" + (tbody.rows.length + 1) + "</td>" +
                            "<td>" + nom + "</td>" +
                            "<td>" + description + "</td>" +
                            "<td>" + prix.toFixed(2) + " €</td>" +
                            "<td>" + quantite + "</td>";
        // Effacer le contenu des champs après l'ajout
        document.getElementById("Nom").value = "";
        document.getElementById("Description").value = "";
        document.getElementById("Prix").value = "";
        document.getElementById("QuantiteStock").value = "";
    } else {
        alert("Veuillez remplir tous les champs");
    }
}
</script>
<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestion_pharmacie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["Nom"];
    $description = $_POST["Description"];
    $prix = $_POST["Prix"];
    $quantite = $_POST["QuantiteStock"];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO medicament (nom, description, prix, quantite) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssdi", $nom, $description, $prix, $quantite);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>

</body>
</html>