<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <?php
        include('navbar.php');
    ?>
   <title>VECANINE TORTE</title>
</head>
<body>
   
<div class="text-hero">
         <div class="circle-logo">
            <img src="images/logo.png" alt="logo">
         </div>
         <h1>Kontakt</h1>
   
         <button id="btnScroll">next</button>
      </div>
</div>
   
<div class="kontakt-naslov">
   <span class="lead">Ukoliko imate pitanja u vezi naših proizvoda, porudžbina ili namirnica, slobodno nas kontaktirajte putem donje forme, telefona ili mejla.</span>
</div>
<div class="kontakt-forma">
   <form id="formID">
      <input type="text" id="name" name="name" placeholder="Ime i prezime" maxlength="30">
      <input type="email" id="email" name="email" placeholder="E-mail" maxlength="30">
      <input type="tel" id="tel" name="tel" placeholder="Kontakt telefon" maxlength="10">
      <textarea name="msg" id="msg" cols="40" rows="10" placeholder="Vaša poruke"></textarea>
      <button class="btnSubmit" id="submit-button" type="submit">submit</button>
    </form>
</div>

</div> <!-- Conatiner end -->
<?php
        include('footer.php');
    ?>
<!-- scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="js/validator.js"></script>
</body>
</html>