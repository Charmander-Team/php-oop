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
    <form action="../index.php" class="form" method="POST">

        <div class="form-group">
            <label for="type" class="form-label">Type:</label>
            <select name="type" id="type">
                <option value="" disabled>--Select type--</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
                <option value="lightning">Lightning</option>
            </select>
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
