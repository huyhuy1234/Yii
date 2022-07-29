<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Layout</title>
    <link rel="stylesheet" href="http://localhost/huy/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid header">
        <div class="row">
            <div class="col-md-12">Header</div>
        </div>
    </div>

    <div class="container-fluid content">
        <div class="row">
            <div class="col-md-12"><?= $content ?></div>
            <!-- $content đưa hết trong file index.php vào file nằm trong view -->
        </div>
    </div>

    <div class="container-fluid Footer">
        <div class="row">
            <div class="col-md-12">Footer</div>
        </div>
    </div>
</body>

</html>