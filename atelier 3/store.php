<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'dbconnexion.php';
    $firstname= $_POST['firstname'];
    $lastname =$_POST['lastname'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $cnx->exec("INSERT INTO students (firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");
      echo "L'etudiant a bien été ajoutée ! " ;
     echo' <button type="submit" class="btn btn-primary" ><a href="index.php">revenir page index</a></button>';
    ?>
    
</body>
</html>