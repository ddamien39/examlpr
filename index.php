<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/index.css">
    <title>Exam LPR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container-ent">
            <form action="/form.php" method="POST">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="firstname" aria-describedby="firstname" placeholder="Dimitri" name="firstname">
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Valkonych" name="lastname">
                </div>

                <div class="form-group">
                    <label for="lastname">E-Mail</label>
                    <input type="email" class="form-control" id="email" placeholder="user@example.com" name="email">
                </div>

                <div class="form-group">
                    <label for="lastname">Telephone</label>
                    <input type="tel" class="form-control" id="phone" placeholder="0499291847" name="phone">
                </div>

                <div class="form-group">
                    <label for="lastname">Message</label>
                    <textarea type="text" class="form-control" id="msg" placeholder="..." name="msg"></textarea>
                </div>

                <?php
                    if(isset($_GET["noti"]))
                    {
                        ?>
                        <p class="mt-1" id="noti"> <?= $_GET["noti"] ?> </p>
                        <?php
                    }
                ?>
                <input type="submit" class="btn btn-primary">
            </form>
        </div>
    </main>
</body>
</html>