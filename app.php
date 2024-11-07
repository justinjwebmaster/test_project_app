<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page - WorldSuperChat</title>
</head>
<body>

  <header>
    <h1>Salut {{user}}</h1>
    <h2>On Cause ?</h2>

    <div>
      <form action="app.php">
        <label for="user">Votre identifiant</label>
        <input type="text" name="user" id="user">
        <input type="submit" value="Me connecter au WorldSuperChat">
      </form>
    </div>
  </header>

  <main>
    <div>
      <ul>
        <li></li>
      </ul>
    </div>

    <a href="inbdex.php">Sortir</a>
  </main>

  <footer>
    <p>&copy; WorldSuperChat - 2024</p>
  </footer>  
  
</body>
</html>