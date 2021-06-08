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
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="">
        </div>
        <div class="form-group">
            <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" name="location" id="location" value="">
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" name="type" id="type" value="">
        </div>
        <div class="form-group">
            <label for="pv" class="form-label">Pv:</label>
            <input type="number" class="form-control" name="pv" id="pv" value="">
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image:</label>
            <input type="text" class="form-control" name="image" id="image" value="">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>