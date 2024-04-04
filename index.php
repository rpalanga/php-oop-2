<?php

require './db.php'


    ?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Animals</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="container my-4">
            <h1 class="text-center display-1 fw-bolder"> Animal Shop </h1>

            <div class="row">
                <?php foreach ($products as $Product) { ?>
                    <div class="col-3 d-flex gap-2 ">

                        <div class="card" style="width: 18rem;">
                            <img src="<?= $Product->image ?>" class="card-img-top" alt="..."
                                style=" height: 300px; object-fit: cover;">
                            <div class="card-body bg-black  text-white opacity-75 ">
                                <h5 class="card-title">
                                    <?= $Product->name ?>
                                </h5>
                                <p class="card-text"> Descrizione:
                                    <?= $Product->descritpion ?>
                                </p>
                                <p class="card-text"> Prezzo:
                                    <?= $Product->price ?>
                                </p>
                                <p class="card-text"> Per il tuo <strong>
                                        <?php echo $Product->category->getAnimal() ?>
                                    </strong></p>
                                <?php

                                if ($Product instanceof Food) {
                                    echo "<p class='card-text'> Scadenza: " . $Product->expiration . "</p>";
                                    echo "<p class='card-text'> Peso: " . $Product->weight . "</p>";
                                    echo "<p class='card-text'> Sapore: " . $Product->flevor . "</p>";
                                } elseif ($Product instanceof Kennel) {
                                    echo "<p class='card-text'> Durata: " . $Product->durabilty . "</p>";
                                    echo "<p class='card-text'> Materiale: " . $Product->material . "</p>";
                                    echo "<p class='card-text'> Peso massimo: " . $Product->weight . "</p>";
                                } else {
                                    // per i Game 
                                    echo "<p class='card-text'> Durata: " . $Product->durabilty . "</p>";
                                    echo "<p class='card-text'> Materiale: " . $Product->material . "</p>";
                                }




                                ?>
                            </div>
                        </div>

                       


                    </div>
                <?php } ?>
                <div class="col-3 my-1 ">
                <?php
                        if ($error) {

                            ?>
                            <div class=" alert alert-warning " role="alert">
                                <?= $error ?>

                            </div>
                            <?php

                        }
                        ?>


                </div>
                <div class="col-3">

                </div>
            </div>
        </div>
    </div>



    <!-- boostrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>