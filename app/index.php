<?php require_once "./calcController.php" ?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
    <body>
        <form name="form" action="" method="post">
            <p class="h1 center"> Calculator Test </p>
            <div class="container overflow-hidden text-center">
            <div class="row gx-5">
                <div class="col">
                <div class="form-group">
                    <label for="number1">Number One</label>
                    <input type="number" class="form-control" id="number1" name="number1" placeholder="enter a value">
                </div>
                </div>
                <div class="col">
                <div class="form-group">
                    <label for="number21">Number Two</label>
                    <input type="number" class="form-control" id="number2" name="number2" placeholder="enter a value">
                </div>
                </div>
            </div>
            </div>
            <input type="submit" name="submit">
            <div class="form-group">
                <label for="textArea" class="center">Answer</label>
                <textarea class="form-control" id="textArea" name="textArea" rows="3"><?php echo $res; ?></textarea>
            </div>
        </form>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>