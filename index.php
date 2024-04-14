<!DOCTYPE html>
<html>
  <head>
    <title>Panel administracyjny</title>
  </head>
  <body>
    <h2>Panel administracyjny</h2>

    <h3>Dodaj nowego użytkownika:</h3>
    <form action="admin.php" method="post">
      <label for="username">Nazwa użytkownika:</label>
      <input type="text" name="username" />

      <label for="email">Adres e-mail:</label>
      <input type="email" name="email" />

      <label for="password">Hasło:</label>
      <input type="password" name="password" />

      <input type="submit" value="Dodaj użytkownika" />
    </form>

    <h3>Usuń użytkownika:</h3>
    <form action="admin.php" method="post">
      <label for="user_id">ID użytkownika:</label>
      <input type="text" name="user_id" />

      <input type="submit" value="Usuń użytkownika" />
    </form>
    <h3>Lista użytkowników:</h3>
<ul>
  <?php
    // Wyświetlenie listy użytkowników
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql); if ($result->num_rows > 0) { while($row =
  $result->fetch_assoc()) { echo "
  <li>
    ID: " . $row["id"] . " - Nazwa użytkownika: " . $row["username"] . " -
    E-mail: " . $row["email"] . "
  </li>
  "; } } else { echo "Brak użytkowników."; } $conn->close(); ?>
</ul>
  </body>
</html>
