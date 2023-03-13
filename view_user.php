<?php
$users = array();
if(($handle = fopen('users.csv', 'r')) !== FALSE) {
  while(($data = fgetcsv($handle, 1000, ',')) !== FALSE) {
    $users[] = $data;
  }
  fclose($handle);
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Users</title>
  </head>
  <body>
    <h1>Users</h1>
    <table>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Picture</th>
      </tr>
      <?php foreach($users as $user): ?>
      <tr>
        <td><?php echo $user[0]; ?></td>
        <td><?php echo $user[1]; ?></td>
        <td><img src="<?php echo $user[2]; ?>" width="100"></td>
      </tr>
      <?php




