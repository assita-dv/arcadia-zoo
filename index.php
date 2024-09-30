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
     <div class="hero-about text-center text-white">
    <div class="hero-about-content">
        <p>Bienvenue sur Notre site Web</p>
        <h1>Zoo Arcadia</h1>
       <a href="lesAnimaux.php"> <button class="btn btn-dark">Voir les Animaux</button></a>
    </div>
</div>
     </section>
    <!--end home section -->
    
</header>
<!-- start about -->
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
          « Une saison au zoo » témoigne aujourd’hui de ication sans faille dans la préservation de la biodiversité, menacée de toutes parts. A travers les projets qu’il porte, notre zoo fait maintenant un pari pour l’avenir : celui que notre créativité, nos valeurs de générosité, d’altruisme, d’optimisme et d’engagement total aux côtés des acteurs de la conservation, touchent le jeune public, cette génération future qui demain aura la lourde responsabilité de soigner, préserver, notre si belle planète.</p>
         <a href="lesAnimaux.php"> <button id="about-btn">voir les animaux</button></a>
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
<!-- end animaux -->
 <!-- section services-->
 <section class="service" id="service">
    <div class="container">
        <div class="service-zoo">
            <div class="services">
                <h5>Services du zoo</h5>
                <div class="cards">
                    <div class="card">
                        <i class="fa-solid fa-train"></i>
                        <h4>Visite Des Habitat Avec un Guide</h4>
                        <p>Au cœur du parc, profitez de nos différents points de restauration et de leurs terrasses. Entre restauration rapide, plats chauds, sandwichs, pizzas, burgers et sucreries, chacun y trouvera son bonheur !</p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-utensils"></i>
                        <h4>Restaurant</h4>
                        <p>Au cœur du parc, profitez de nos différents points de restauration et de leurs terrasses. Entre restauration rapide, plats chauds, sandwichs, pizzas, burgers et sucreries, chacun y trouvera son bonheur !</p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-duotone fa-hippo"></i>
                        <h4>Visite Des Habitat</h4>
                        <p>Au cœur du parc, profitez de nos différents points de restauration et de leurs terrasses. Entre restauration rapide, plats chauds, sandwichs, pizzas, burgers et sucreries, chacun y trouvera son bonheur !</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- end section service -->

 <!-- section services-->
 <section class="review" id="review">
    <div class="container">
        <div class="review-zoo">
            <div class="reviews">
                <h5>Avis De Nos Visiteur</h5>
                
                <div class="cards">
                    <div class="card">
                        <img src="marais/avie1.jpg" alt="">
                        <div class= "starta" style=" display: flex;">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                        </div>
                        <p>Un zoo très beau, bien entretenu.
                          On voit bien que les animaux y sont bien.
                          Les soignants très gentils et à l écoute quand les enfants posent des questions.
                          Vraiment on a passé une joli journée.
                          Zoo assez grand mais pas trop quand on a des petits enfants.
                          Tout le monde était ravi. !</p>
                        
                        </div>
                    <div class="card">
                    <img src="marais/avie3.jpg" alt="">
                    <div class= "starta" style=" display: flex;">
                    <i class="fa-solid fa-star"></i> 
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                   <p>un zoo très propre et très ombragé. Un personnel gentil et accueillant De Très beaux animaux. De grands espaces. Un beau moment passé au zoo arcadia même sous un peu de pluie. .</p> 
                </div>
                    <div class="card">
                    <img src="marais/avis4.jpg" alt="">
                    <div class= "starta" style=" display: flex;">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    </div>
                        <p>Un parc zoologique digne de sa réputation ! Un respect des animaux bien visible, des enclos propres et adaptés à leurs environnements naturels,  des professionnels à l'écoute et polis. les animaux ont été facile à voir car des aménagements sont installés un peu partout autour des enclos.
                         !</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
 </section>
   <!-- end section review -->

   <!-- start contact -->
    <?php
require_once "contact.php"  ?>
<!-- end section contact -->

   
<script src="/script.javascript/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

<!-- ajout de footer -->

<?php
    require "pages/footer.html";
    ?>

</html>