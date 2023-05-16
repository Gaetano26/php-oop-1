<?php

include './partials/template/header.php';
?>

<?php
include __DIR__ . '/Models/Movies.php';

$movies = [
    new Movie ('Il Padrino', 'The Godfather', 'en', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/r4gnMXoY1efvaolNDjn3nj4046S.jpg', new Category('adulti', 'gangster') ),
    new Movie ('Via Col Vento', 'Gone With The Wind', 'en', 8 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/xRyW60TXvX7Q2HSbpz8nZxKaTkL.jpg', new Category('minori', 'love-story') ),
    new Movie ('Psycho', 'Psycho', 'en', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/tdqX0MWaFHuGwUygYn7j6eluOdP.jpg', new Category('adulti', 'horror') ),
    new Movie ('Gravity', 'Gravity', 'en', 7 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/4pRXqT7wQmoH5sH6Z4WYmbAFG4t.jpg', new Category('minori', 'fantasy') ),
    new Movie ('Toy Story - Il Mondo Dei Giocattoli', 'Toy Story', 'it', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/mGnOtBmpkQ5CndwxeIKDUqkUkre.jpg', new Category('bambini', 'cartoon') ),
    new Movie ('Pulp Fiction', 'Pulp Fiction', 'de', 9 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/9p10J9Xp7MuaVac56g8BwAuXEsA.jpg', new Category('adulti', 'thriller') ),
    new Movie ('Forrest Gump', 'Forrest Gump', 'fr', 8, 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/pGZqc9jQ6F8klQZKm37NAAMH70o.jpg', new Category('minori', 'dramatic/romantic') ),
    new Movie ('Guerre Stellari', 'Star Wars', 'en', 8 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/fVqKwpvobwWy0P1UImZWIDuw4RI.jpg', new Category('minori', 'adventure/fantasy') ),
    new Movie ('E.T.', 'E.T.', 'en', 7 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/qKMqJCldp5fPsuv6Vb0RbKY9K8U.jpg', new Category('minori', 'fantasy') ),
    new Movie ('Il silenzio degli innocenti', 'The Silence of the Lambs', 'en', 8 , 'https://www.themoviedb.org/t/p/w600_and_h900_bestv2/8P4fZhbiqfeMk2btOeXLu0AKvBl.jpg', new Category('adulti', 'horror') )
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
                            <p> Vote:<?php echo $movie->category ?></p>
                            <p>Nationality: <?php echo $movie->getFlag() ?> </p>

                        </div>


                    </div>
        </div>
         <?php } ?>
   
   </div>
 </main>
<?php
include './partials/template/footer.php';
?>