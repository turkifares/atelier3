<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <button type="submit" class="btn btn-primary active" > <a href="create.php" style="color:black" >ajouter etudiant</a> </button>
<table class="table-striped">
    <th>id</th>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>phone</th>
    <th>edit</th>
    <?php

    include 'dbconnexion.php';
    
    while ($data =$rep->fetch())
    {
        echo '<tr>';
        echo '<td>'.$data['id'].'</td>';
        echo '<td>'.$data['firstname'].'</td>';
        echo '<td>'.$data['lastname'].'</td>';
        echo '<td>'.$data['email'].'</td>';
        echo '<td>'.$data['phone'].'</td>';
        echo '<td> <button class="btn btn-primary"> <a href="edit.php" class="badge badge-light">edit</a> </button> </td>';
        echo '</tr>';

    }
    ?>

    </table>  
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>