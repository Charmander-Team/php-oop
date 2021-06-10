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
    <form class="form" method="POST">
        <div class="form-group">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="pikachu">
        </div>
        <div class="form-group">
            <label for="location" class="form-label">Location:</label>
            <input type="text" class="form-control" name="location" id="location" placeholder="kanto">
        </div>
        <div class="form-group">
            <label for="type" class="form-label">Type:</label>
            <select name="type" id="type">
                <option value="" disabled>--Select type--</option>
                <option value="fire">Fire</option>
                <option value="water">Water</option>
                <option value="lightning">Lightning</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hp" class="form-label">HP:</label>
            <input type="number" class="form-control" name="hp" id="hp" min="0" value="0" step="10">
        </div>
        <div class="form-group">
            <label for="hasEvolve" class="form-label">HasEvolve:</label>
            <input type="checkbox" class="form-control" name="hasEvolve" id="hasEvolve" >
        </div>
        <div class="form-group">
            <label for="image" class="form-label">Image URL (.png):</label>
            <input type="url" class="form-control" name="image" id="image" pattern="https://.*.png" placeholder="https://example.png">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
</body>

</html>
