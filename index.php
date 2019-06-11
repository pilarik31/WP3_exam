<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Práce</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <form action="output.php" method="POST">
                <div class="form-group">
                    <label for="firstname">Jméno</label>
                    <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Jan">
                </div>

                <div class="form-group">
                    <label for="surname">Přijmení</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Pilař">
                </div>

                <div class="border">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="male" id="gender-male" required>
                        <label for="gender-male" class="form-check-label">Muž</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="gender" value="female" id="gender-female" required>
                        <label for="gender-female" class="form-check-label">Žena</label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="age">Věk *</label>
                    <input type="number" class="form-control" name="age" id="age" required>
                </div>

                <div class="form-group">
                    <label for="job">Práce *</label>
                    <select class="form-control" name="job" id="job" required>
                        <option value="digger">Kopáč</option>
                        <option value="itGuy">IT specialista(ka)</option>
                        <option value="janitor">Uklízečka</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Vyhodnotit</button>

            </form>

        </div>
    </div>
    <script src="js/bootstrap.js"></script>
</body>

</html>