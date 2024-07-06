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
<?php
    require "pages/header.html";
    ?>


<header>
    <!-- debut home section -->
     <section class="home" id="Accueil">
        <div class="content" >
            <h3>profiter de la merveilleuse <br> aventure des<br>animaux</h3>
            <a href="#" class="btn">rencontrer le zoo</a>
        </div>
        <img src="/images/" alt="">
        
     </section>
    <!-- debut home section -->
     
</header>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
<!-- start about-->
<section id="about">
    <div class="container">
        <div class="heading">
            <div class="row">
                <div class="col-md-6">
<div class="card">
    <img src="images/tigre.jpg" alt="">
            </div>
        </div>
        <div class="col-md-6">
    <h2>presentation</h2>
       <p>Le Zoo de La Flèche écrit actuellement l’une des pages les plus passionnantes et les plus stimulantes de son histoire. Cette aventure est avant tout une rencontre de femmes et d’hommes animés d’une passion commune et désireux d’atteindre l’excellence dans l’accomplissement des missions du parc : émerveillement des visiteurs, éducation, recherche et conservation.
          « Une saison au zoo » témoigne aujourd’hui de notre souci permanent du bien-être de nos animaux et de notre implication sans faille dans la préservation de la biodiversité, menacée de toutes parts. A travers les projets qu’il porte, notre zoo fait maintenant un pari pour l’avenir : celui que notre créativité, nos valeurs de générosité, d’altruisme, d’optimisme et d’engagement total aux côtés des acteurs de la conservation, touchent le jeune public, cette génération future qui demain aura la lourde responsabilité de soigner, préserver, notre si belle planète.</p>
          <button id="about-btn">voir les animaux</button>
        <div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- end about-->

 <!-- start animaux -->
<section class="animaux" id="animaux">
    <h2 class="heading">Animaux</h2>
    <div class="box-container">
        <div class="box">
            <img src="/images/proquet.jpg" alt="">
            <div class="content">
               <h3>Peroquet</h3>
               <a href="#" class="btn btn-success me-md-2">plus en datail</a>
            </div>
        </div>
        <div class="box">
            <img src="/images/autriche.jpg" alt="">
            <div class="content">
               <h3>Autriche</h3>
               <a href="#" class="btn btn-success me-md-2 text-center ">plus en datail</a>
            </div>
        </div>
        <div class="box">
            <img src="/images/lama.jpg" alt="">
            <div class="content">
               <h3>Lama</h3>
               <a href="#" class="btn btn-success me-md-2">plus en datail</a>
            </div>
        </div>
        <div class="box">
            <img src="/images/lemurans.jpg" alt="">
            <div class="content">
               <h3><Leg>Lemurans</Leg></h3>
               <a href="#" >
               <button type="button" class="btn btn-success me-md-2 ">plus en datail</button>
            </a>
        </div>
        </div>
    

</section>
<?php
    require "pages/footer.html";
    ?>

</html>