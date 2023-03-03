<?php
// coding php

$cp = curl_init();
curl_setopt($cp, CURLOPT_URL, "https://jsonplaceholder.typicode.com/users");
curl_setopt($cp, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($cp);
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
            <div class="col-md-12">

                <div class="card">
                    <img class="card-img-top" src="holder.js/100x180/" alt="">
                    <div class="card-body">
                        <h4 class="card-title text-center">API PHP USING CURLPOT</h4>
                        <table class="table table-sm table-hover table-response table-bordered">
                            <thead>
                                <th>#</th>
                                <th>User</th>
                                <th>city</th>
                            </thead>
                            <tbody>
                                <?php foreach ($response as $data) : ?>
                                    <tr>
                                        <td><?php echo $data['id']; ?></td>
                                        <td><?php echo $data['username']; ?></td>
                                        <td><?php echo $data['address']['city']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
        </div>
    </div>



</body>

</html>