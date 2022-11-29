<?php
//var_dump($_GET);
if (!empty($_GET)) {
    $vote = $_GET['vote'];
    $park = $_GET['park'];
    if ($park === 'checked') {
        $park = true;
    }
}

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4,
        'img' => '01.webp'
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2,
        'img' => '02.webp'
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1,
        'img' => '03.webp'
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5,
        'img' => '04.webp'
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50,
        'img' => '05.webp'
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
        .card.ms_card img {
            height: 300px;
        }
    </style>
</head>

<body>
    <main id="site_main">
        <div class="container">
            <form action="index.php" method="get">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="checked" name="park" id="">
                    <label class="form-check-label" for="park">
                        Parking
                    </label>
                </div>
                <div class="vote my-3">
                    <label for="vote">Vote</label>
                    <input type="number" name="vote" id="" min="0" max="5">
                </div>
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </form>
        </div>
        <div class="container ms_container py-5">
            <h1 class="my-3">Hotels</h1>
            <div class="row gy-3 row-cols-3">
                <?php foreach ($hotels as $hotel) : ?>
                    <?php if (isset($park) && isset($vote)) { ?>
                        <?php if ($park === $hotel['parking'] && $hotel['vote'] >= intval($vote)) : ?>
                            <div class="col">
                                <div class="card ms_card">
                                    <img class="card-img-top" src=<?= './img/' . $hotel['img'] ?> alt="Title">
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
                        <?php endif ?>
                    <?php } elseif (isset($park)) { ?>
                        <?php if ($park === $hotel['parking']) : ?>
                            <div class="col">
                                <div class="card ms_card">
                                    <img class="card-img-top" src=<?= './img/' . $hotel['img'] ?> alt="Title">
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
                        <?php endif ?>
                    <?php } elseif (isset($vote)) { ?>
                        <?php if ($hotel['vote'] >= intval($vote)) : ?>
                            <div class="col">
                                <div class="card ms_card">
                                    <img class="card-img-top" src=<?= './img/' . $hotel['img'] ?> alt="Title">
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
                        <?php endif ?>
                    <?php } else { ?>
                        <div class="col">
                            <div class="card ms_card">
                                <img class="card-img-top" src=<?= './img/' . $hotel['img'] ?> alt="Title">
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
                    <?php } ?>
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