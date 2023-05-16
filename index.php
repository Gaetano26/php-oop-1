<?php

include './partials/template/header.php';
?>

<?php
include __DIR__ . '/Models/Movies.php';
$movies = [
    new Movie ('Il Padrino', 'The Godfather', 'en', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg' ),
    new Movie ('Via Col Vento', 'Gone With The Wind', 'en', 8 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg' ),
    new Movie ('Psycho', 'Psycho', 'en', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg' ),
    new Movie ('Gravity', 'Gravity', 'en', 7 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg' ),
    new Movie ('Toy Story - Il Mondo Dei Giocattoli', 'Toy Story', 'it', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg' ),
    new Movie ('Pulp Fiction', 'Pulp Fiction', 'de', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg' ),
    new Movie ('Forrest Gump', 'Forrest Gump', 'fr', 8, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg' ),
    new Movie ('Guerre Stellari', 'Star Wars', 'en', 8 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg' ),
    new Movie ('E.T.', 'E.T.', 'en', 7 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg' ),
    new Movie ('Il silenzio degli innocenti', 'The Silence of the Lambs', 'en', 8 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg' )
];


?>
 <main class="container">
   <div class="row">
    
        <?php foreach ($movies as $movie) { ?>
        <div class="col col-lg-3">
                    <div class="card p-3 ms-3 mt-4">
                        <div class="card-img">
                            <img class="img-fluid" src=<?php echo $movie->image; ?> alt="">
                        </div>

                        <div class="card-body">
                            <h3 class="card-title fs-6"> <?php echo $movie->title ?></h3>
                            <h5 class="fs-6"> <?php echo $movie->origine_title ?></h5>
                            <p> Vote:<?php echo $movie->vote ?></p>
                            <p>Nationality: <?php echo getFlag() ?> </p>

                        </div>


                    </div>
        </div>
         <?php } ?>
   
   </div>
 </main>
<?php
include './partials/template/footer.php';
?>