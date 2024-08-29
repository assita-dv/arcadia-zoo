<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCADIA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/style/main.css">
    <link rel="stylesheet" href="/style/main.scss">
    
    
</head>
<body>
    <header>
<?php
    require "pages/header.html";
    ?>
     <!-- debut home section -->
     <section class="home-service" id="service">
     <div class="service-about text-center text-white">
    <div class="service-about-content">
        <p>Tout Nos Services</p>
        <h1>Zoo Arcadia</h1>
        <!--<button class="btn btn-primary">Réserver</button>-->
    </div>
</div>
     </section>
<!-- end section home-->

<!-- start section restauran -->
 <section class="restau" id="restau">
  <div class="container">
    <div class="heading-resto">
        <div class="row">
            <div class="col-md-6" >
            <div class="card">
            <img src="/images/resto.jpg" alt="">
            </div>
            </div>
            <div class="col-md-6" >
         <h2>Safari Restaurant </h2>
        <p>SAFARI ARKA
Ouvert toute l’année, venez profiter d’une pause déjeuner décontractante dans notre cafétéria ou sur ses terrasses.
Menu adulte à partir de 15€20 Menu enfant à 8€90
Ouvert tous les jours, dès l’ouverture du parc, le restaurant- Safari ARKA vous propose un large choix d’entrées, plats chauds, desserts, boissons et glaces.
Service chaud entre 11h45 et 15h. Accès privilégié pour les personnes à mobilité réduite.
        </p>
  </div>
  </div>
    </div>
  </div>
  <section class="restau" id="train">
  <div class="container">
   <div class="heading-train"> 
        <div class="row">
            <div class="col-md-6" >
             <div class="card">
                <img src="/images/petit train.jpg"  alt="">
            </div>
            </div>
                 <div class="col-md-6" >
            <h2> Visite d'habitat au bord d'un petit train.</h2>
           <p> Visite d'habitat au bord d'un petit train. Nous avons mis en place des petits trains safari pour que vous puissiez profiter 
             pleinement de votre visite, tout aussi divertissante.</p>
  </div>
  </div>
    </div>
  </div>

  <section id="guide">
    <div class="container">
        <div class="heading-guide">
            <div class="row">
                <div class="col-md-6">
<div class="card">
    <img src="/images/veterin.jpg" alt="">
            </div>
        </div>
        <div class="col-md-6">
    <h3>Visite Des Habitat Accompagné D'un Guide Gratuit</h3>
       <p> Profiter de votre visite accompagné des nos guide et sa gratuitement Le Zoo de La arcadia écrit actuellement l’une des pages les plus passionnantes et les plus stimulantes de son histoire. 
       </p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- end about-->
 </section>

<!-- debut home section fin -->
<section class="home-service-f1" id="servicef">
     <div class="service-aboutf1 text-center text-white">
    <div class="service-aboutf1-content">
        <h1>Zoo Arcadia</h1>
        <a href="lesAnimaux.php"><button class="servicef1-btn">voir les animaux</button></a>
    </div>
</div>
     </section>
<!-- end section home-->
<script src="/script.javascript/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
<footer>
    <?php require "pages/footer.html";
    ?>
</footer>