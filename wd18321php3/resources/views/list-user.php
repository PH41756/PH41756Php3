<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>uo</h1>
   <table border="2">
<thead>
    <tr>
        <th>id</th>
        <th>name</th>
    </tr>
</thead>
<tbody>

<?php foreach($user as $value): ?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><?= $value['name'] ?></td>
    </tr>
    <?php endforeach; ?>

</tbody>
   </table>
  
</body>
</html>