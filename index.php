<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP Hotels</title>
    <style>
        .container.ms_container {
            position: absolute;
            left: 50%;
            top: 50%;
            translate: -50% -50%;
        }
    </style>
</head>

<body>
    <main id="site_main">
        <div class="container ms_container">
            <h1 class="my-3">Hotels</h1>
            <div class="row gy-3 row-cols-3">
                <?php foreach ($hotels as $hotel) : ?>
                    <div class="col">

                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="Title">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $hotel['name'] ?></h4>
                                <p class="card-text"><?php echo $hotel['description'] ?></p>
                                <?php if ($hotel['parking']) { ?>
                                    <i class="fa-solid fa-car"></i>
                                <?php } else { ?>
                                    <i class="fa-solid fa-ban"></i>
                                <?php } ?>
                                <div class="vote">
                                    <?php for ($i = 0; $i < $hotel['vote']; $i++) : ?>
                                        <i class="fa-solid fa-star"></i>
                                    <?php endfor ?>
                                </div>
                                <span class="distance"><?php echo $hotel['distance_to_center'] ?> km from center</span>

                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </main>
    <!-- /#site_main -->


</body>

</html>