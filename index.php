<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARCADIA</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
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
    <h2>présentation</h2>
       <p>Le Zoo Arcadia écrit actuellement l’une des pages les plus passionnantes et les plus stimulantes de son histoire. Cette aventure est avant tout une rencontre de femmes et d’hommes animés d’une passion commune et désireux d’atteindre l’excellence dans l’accomplissement des missions du parc : émerveillement des visiteurs, éducation, recherche et conservation.
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


<!--  start animaux 4 accueil --->
 <section class="section-figure section-bg-color" style="background-color: #212d25;">
  <div class=" container frame-space-before- fram-space-after- position-relative" id="container-4">
    <div class="py-4">
        <div class="row">
            <div class="col-sm-12">
                <div class="frame frame-default frame-type-text frame-layout-0">
                    <p class="center">
                        <span>venez découvrir un parc emblématique, <br> qui allie habilement respect de la biodiversité, innovation et émerveillement !</span>
                    </p>
                </div>
                <div class="container fivecol-20-20-20-20" id="container-photos4">
                    <div class="py-4">
                        <div class="row row-cols-1 row-cols-xs row-cols-md-2 row-cols-lg-5 row-cols-xl-5 frame space-before- frame-space-after frame-class-indent">
                            <div class="col col-sm-12 col-md-6 mb-3">
                                <div class="item h100 my-2 frame-space-before frame-space-after-">
                                    <div class="card  zoom-in content-on-image-bottom" style="background-color: #3e5342;">
                                        <!-- card image -->
                                         <div class="figure gradient-overlay"> 
                                         <img src="/images/proquet.jpg" alt="">
                                         </div>
                                         <div class="contente">
                                            <!-- title + sublitle -->
                                             <div class="title">
                                                <h3 style="color: #3e5342; text-align:left;"></h3>
                                                <div class style="position:relative;">
                                                    <span class="subtitle" style="color: #3e5342;"></span>
                                                </div>
                                             </div>
                                            <!--- cards button -->
                                            <div class="btn-inn"><a href="poco.php">
                                                <span>voire</span>
                                            </a>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 2 section -->
                            <div class="col col-sm-12 col-md-6 mb-3">
                                <div class="item h100 my-2 frame-space-before frame-space-after-">
                                    <div class="card  zoom-in content-on-image-bottom" style="background-color: #3e5342;">
                                        <!-- card image -->
                                         <div class="figure gradient-overlay"> 
                                         <img src="/images/bufle.jpg" alt="">
                                         </div>
                                         <div class="contente">
                                            <!-- title + sublitle -->
                                             <div class="title">
                                                <h3 style="color: #3e5342; text-align:left;"></h3>
                                                <div class style="position:relative;">
                                                    <span class="subtitle" style="color: #3e5342;"></span>
                                                </div>
                                             </div>
                                            <!--- cards button -->
                                            <div class="btn-inn"><a href="bufle.php">
                                                <span>voire</span>
                                            </a>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!--- 3 section -->
                            <div class="col col-sm-12 col-md-6 mb-3">
                                <div class="item h100 my-2 frame-space-before frame-space-after-">
                                    <div class="card  zoom-in content-on-image-bottom" style="background-color: #3e5342;">
                                        <!-- card image -->
                                         <div class="figure gradient-overlay"> 
                                         <img src="/images/jungle/gorille de l'est.jpg"  style="height: 295px;" alt="">
                                         </div>
                                         <div class="contente">
                                            <!-- title + sublitle -->
                                             <div class="title">
                                                <h3 style="color: #3e5342; text-align:left;"></h3>
                                                <div class style="position:relative;">
                                                    <span class="subtitle" style="color: #3e5342;"></span>
                                                </div>
                                             </div>
                                            <!--- cards button -->
                                            <div class="btn-inn"><a href="gorille.php">
                                                <span>voire</span>
                                            </a>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            <!-- 4 section -->
                            <div class="col col-sm-12 col-md-6 mb-3">
                                <div class="item h100 my-2 frame-space-before frame-space-after-">
                                    <div class="card  zoom-in content-on-image-bottom" style="background-color: #3e5342;">
                                        <!-- card image -->
                                         <div class="figure gradient-overlay"> 
                                         <img src="/images/lemurans.jpg" alt="">
                                         </div>
                                         <div class="contente">
                                            <!-- title + sublitle -->
                                             <div class="title">
                                                <h3 style="color: #3e5342; text-align:left;"></h3>
                                                <div class style="position:relative;">
                                                    <span class="subtitle" style="color: #3e5342;"></span>
                                                </div>
                                             </div>
                                            <!--- cards button -->
                                            <div class="btn-inn"><a href="lemur.php">
                                                <span>voire</span>
                                            </a>
                                        </div>
                                         </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div> 
            </div>
        </div>
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
                        <p>Au cœur du parc, profitez de nos différents points de restauration et de leurs terrasses. Entre restauration rapide, plats chauds, sandwichs, pizzas,</p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-utensils"></i>
                        <h4>Restaurant</h4>
                        <p>Au cœur du parc, profitez de nos différents points de restauration et de leurs terrasses. <br> Entre restauration rapide, plats chauds, sandwichs, pizzas, burgers et sucreries, chacun y trouvera son bonheur !</p>
                    </div>
                    <div class="card">
                        <i class="fa-solid fa-duotone fa-hippo"></i>
                        <h4>Visite Des Habitat</h4>
                        <p>Au cœur du parc, profitez de nos différents points de restauration et!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>
 <!-- end section service -->
  <!-- start section Avis  -->
  <section class="carousel-avis" style="margin-top: 145px; padding-top:145px;">
  <h3>Avis De Nos Visiteur</h3>
  <div id="carouselExampleDark" class="carousel carousel-wille slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
    <img src="../marais/avie1.jpg"  style="width: 25%; height: 30%; " class="img-fluid  mx-auto w-40 " alt="...">
      <div class="carousel-caption  d-md-block">
      <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
        <h5>julli</h5>
        <p >Un parc zoologique digne de sa réputation !  Un respect des animaux bien visible, des enclos propres  et adaptés à leurs environnements naturels,  des professionnels à l'écoute et polis.  les animaux ont été facile à voir car des aménagements sont  installés un peu partout autour des enclos.</p>
     
</div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
    <img src="../marais/avie3.jpg"  style="width: 25%; height: 30%; " class="img-fluid  mx-auto w-40" alt="...">
      <div class="carousel-caption d-md-block">
      <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
        <h5>gabrielle</h5>
        <p >Un zoo très beau, bien entretenu.
                          On voit bien que les animaux y sont bien.
                          Les soignants très gentils et à l écoute quand les enfants posent des questions.
                          Vraiment on a passé une joli journée. </p>
      </div>
    </div>
    <div class="carousel-item">
    <img src="../images/avis5.jpg"  style="width: 25%; height: 30%;" class=" img-fluid  mx-auto w-40" alt="...">
      <div class="carousel-caption d-md-block">
      <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
                   <i class="fa-solid fa-star"></i>
        <h5>Maya labelle</h5>
        <p>un zoo très propre et très ombragé. <br> Un personnel gentil et accueillant De Très beaux animaux. De grands espaces. Un beau moment passé au zoo arcadia même sous un peu de pluie.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

   </section>
   <a href="avis-visiteur.php"><button type="button" class="btn btn-avis">Laissez un avis</a></button>
  <!-- end section avis -->
 
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