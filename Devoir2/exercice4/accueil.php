<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <style>
        body {
            width: 60%;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container p-5 mt-5">
        <h1>Authentification</h1>
        <hr>
        <form action="authentification.php" method="post" class="">
            <div class="form-group">
                <label for="">Loign</label>
                <input type="email" name="login" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Mot de passe</label>
                <input type="password" name="motdepasse" class="form-control" required>
            </div>
            <button class="btn btn-outline-secondary" type="submit">Log in</button>
        </form>
    </div>
</body>
</html>