<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gestin_pharmacie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 120, 212, 0.8); /* نصف شفاف */
            color: white;
            padding: 10px 20px;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        header h1 {
            margin: 0;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 1.1em;
        }

        .cover {
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

        .overlay {
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .content {
            position: relative;
            z-index: 1;
            background-color: #f4a261;
            padding: 20px;
            color: white;
            border-radius: 5px;
            max-width: 600px;
            text-align: center;
        }

        .welcome {
            transform: rotate(-10deg);
            font-weight: bold;
            margin-bottom: 20px;
        }

        .objectives h2 {
            color: #e63946;
            margin: 0;
        }

        .objectives p {
            color: #2a9d8f;
            font-size: 1.1em;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>gestion de pharmacie</h1>
    </header>
    <div class="cover">
        <div class="overlay"></div>
        <a href="Login.php" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: rgba(0, 0, 0, 0.5); padding: 10px 20px; border-radius: 5px; text-decoration: none; color: white;">Se connecter</a>
    </div>
    <footer>جميع الحقوق محفوظة</footer>
</body>
</html>