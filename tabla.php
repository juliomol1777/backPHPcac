<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    
    <?php require("./usuario.php")?>
    <?php while ($participantes = mysqli_fetch_array($consultas))  { ?>
      <tr>
        <th scope="row"><?php echo $participantes['id'] ?></th>
        <td><?php echo $participantes['nombre'] ?></td>
        <td><?php echo $participantes['apellido'] ?></td>
        <td><?php echo $participantes['provincia'] ?></td>
        </tr>
    <?php }  ?>
      
  </tbody>
</table>
</body>
</html>