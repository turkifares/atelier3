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
    <fieldset>
        <legend class="text-center">nouvel etudiant</legend>
        <form action="store.php" method="post">
            <div class="form-group">
            <label for="firstname">first name</label>
            <input type="text"  class="form-control" name="firstname">
            </div>
            <div class="form-group">
            <label for="lastname">last name</label>
            <input type="text"  class="form-control" name="lastname">
            </div>
            <div class="form-group">
            <label for="email">email</label>
            <input type="text"  class="form-control" name="email">
            </div class="form-group">
            <div class="form-group">
            <label for="phone">phone</label>
            <input type="number"  class="form-control" name="phone">
            </div>
            <button class="btn btn-success">valider</button>
        <button type="reset"  class="btn btn-success">annuler</button>
        </form>
        </div>
        
    </fieldset>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>