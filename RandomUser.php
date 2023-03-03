<?php
// coding php

$users = curl_init();

if (isset($_GET['name'])) {
    $name = $_GET['name'];

    curl_setopt_array($users, [
        CURLOPT_URL => "https://api.agify.io/?name={$name}",
        CURLOPT_RETURNTRANSFER => true
    ]);
}


$response = curl_exec($users);
$response = json_decode($response, true);

// var_dump($response);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Api CURLPOT</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>

    <div class="container mt-5">



        <div class="row">
            <div class="col-md-8 mx-auto">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">RANDOM USER</h4>

                        <form action="" method="GET">

                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="type any Name...">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Rnadom user" class="form-control bg-success text-white">
                            </div>
                        </form>

                        <?php if (isset($response)) :  ?>
                            <div class="mt-2 my-5 border p-2">
                                <h3>Name : <?php echo $response['name'] ?></h3>
                                <h3>Age : <?php echo $response['age'] ?></h3>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>


            </div>
        </div>
    </div>



</body>

</html>