<?php
include __DIR__ . '/data/data.php';
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme='dark'>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header class='text-center container'>HOTEL SELEZIONATI</header>
    <main class='container'>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Parking</th>
      <th scope="col">vote</th>
      <th scope="col">Distance</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($hotels as $hotel) : ?>
        <tr>
            <td><?= $hotel['name']?></td>
            <td><?= $hotel['description']?></td>
            <!-- senza icona -->
            <td>
                <?= $hotel['parking'] ? 'si' : 'no'?>
            </td> 
            <!-- con icona -->
            <td>
                <?php $icon = $hotel['parking'] ? 'fa-solid fa-check' : 'fa-regular fa-circle-xmark' ?>
                <i class="<?= $icon ?>"></i>
            </td>
            <!-- in ogni caso basta che ti ricordi che ci va sempre un ternario in entrambi i casi e 
        che se fai dei calcoli all'interno dell'html guarda la sintassi di riga 40
    ?= è uguale all'innertext di js, ?php è per fare logica  -->
            <td><?= $hotel['vote']?> su 5</td>
            <td><?= $hotel['distance_to_center']?> km</td>
        </tr>         
    <?php endforeach ?>
  </tbody>
</table>
    </main>
</body>

</html>