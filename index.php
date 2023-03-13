<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Ass-mod-6</title>
</head>
<body>
    <form method="POST" action="validate.php" enctype="multipart/form-data">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required> <br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br><br>

  <label for="profile_picture">Profile Picture:</label>
  <input type="file" id="profile_picture" name="profile_picture" accept=".jpg, .jpeg, .png" required><br><br>

  <input type="submit" value="Submit">
</form>
</body>
</html>
