<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <?php
        include('navbar.php');
    ?>
   <title>VECANINE TORTE</title>
</head>

         <div class="text-hero">
            <div class="circle-logo">
               <img src="images/logo.png" alt="logo">
            </div>
            <h1>Proizvodi</h1>
            <button id="btnScroll">next</button>
         </div>
</div> 
<div id="onama" class="decoration">
   <h1>Ponuda i cenovnik naših proizvoda</h1>
   <div class="underline-decoration"></div>
   <thead>
                            <tr>
                                <th><a class="column_sort" id="naslov" data-order="desc" href="#">Naziv Proizvoda</a></th>
                                <th><a class="column_sort" id="cena" data-order="desc" href="#">Cena</a></th>
                                <th><a class="column_sort" id="trajanje" data-order="desc" href="#">Trajanje</a></th>
                                <th><a class="column_sort" id="datum_izvodjenja" data-order="desc" href="#">Datum izvođenja</a></th>
                                </tr>
                        </thead>
   <?php
        include('footer.php');
    ?>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>