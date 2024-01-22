<?php
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Prodotti</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center">I nostri prodotti</h2>
        </div>

        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-4">
                    <div class="card m-3">
                        <div class="card-body">
                            <h5 class="card-title text-center"><?= $prodotto->nome?></h5>
                            <h6 class="card-text text-center"><?= $prodotto->genere?></h6>
                            <p class="card-text text-center"><?= $prodotto->tipoAnimale?></p>
                            <p class="card-text text-center"><?= $prodotto->costo?></p>
                            <p class="card-text text-center"><?= implode(", ",  $prodotto->caratteristicheProdotto) ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>