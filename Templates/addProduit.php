<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <form action="index.php" class="form" method="POST">
        <div class="form-group">
            <label for="image" class="form-label">Image: </label>
            <input type="text" class="form-control" name="image" id="image" placeholder="https://wwww.produit.com/image.jpg">
        </div>
        <div class="form-group">
            <label for="name" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Potion">
        </div>
        <div class="form-group">
            <label for="prix" class="form-label">Prix: </label>
            <input type="number" class="form-control" name="prix" id="prix" placeholder="99€">
        </div>
        <div class="form-group">
            <label for="description" class="form-label">Description: </label>
            <input type="textarea" class="form-control" name="description" id="description" >
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
