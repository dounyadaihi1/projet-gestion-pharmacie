<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* General Styles */
        body {
            background-image: url('lll.jpg'); /* مسار الصورة */
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 10px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
        }

        header h1 {
            margin: 0;
            padding-left: 20px;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .logout {
            color: #fff;
            text-decoration: none;
            padding-right: 20px;
            font-weight: bold;
        }

        main {
            margin-top: 20px;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        section h2 {
            margin-top: 0;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 10px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        ul li:last-child {
            border-bottom: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Gestion de Pharmacie</h1>
            <nav>
                <ul>
                    <li><a href="#vent">Ventes</a></li>
                    <li><a href="#medicament">Médicaments</a></li>
                    <li><a href="#notification">Notifications</a></li>
                    <li><a href="#achat">Achats</a></li>
                </ul>
            </nav>
            <a href="logout.php" class="logout">Déconnecter</a>
        </header>

        <main>
            <section id="vent">
                <h2>Ventes</h2>
                <p>Section des ventes de la pharmacie.</p>
            </section>

            <section id="medicament">
                <h2>Médicaments</h2>
                <p>Section de gestion des médicaments.</p>
            </section>

            <section id="notification">
                <h2>Notifications</h2>
                <p>Section des notifications.</p>
            </section>

            <section id="achat">
                <h2>Achats</h2>
                <p>Section des achats de la pharmacie.</p>
            </section>
        </main>
    </div>
</body>
</html>