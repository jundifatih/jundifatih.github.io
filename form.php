<!-- CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php

$nama = $_post['nama'];
$email = $_post['email'];
$pesan = $_post['pesan'];
$nomor = $_post['nomor'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid pt-3" id="form">
        <div class="row justify-content-center">
            <div class="col-md-4 text-center" id="ucapan">
                <h1>Terimakasih <?php echo $_POST['nama'] ?></h1>
            </div>
        </div>
    </div>
</body>
</html>