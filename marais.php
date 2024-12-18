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
     <section class="home-marais" id="marais">
     <div class="marais-about text-center text-white">
    <div class="marais-about-content">
        <p>Habitat MARAIS</p>
        <h1>Zoo Arcadia</h1>
    </div>
</div>
     </section>
<!-- end section home-->

<!-- start section about jungle-->
     <section id="about-m">
    <div class="container">
        <div class="heading-marais">
            <div class="row">
                <div class="col-md-6">
<div class="card">
    <img src="marais/chouette effraie.jpg" alt="">
            </div>
        </div>
        <div class="col-md-6">
    <h7>presentation</h7>
       <p>Les marais (ou marécages / zones marécageuses) sont un écosystème à la fois terrestre et aquatique composé d’une grande étendue d’eau stagnante généralement peu profonde et abondante en végétation. On trouve ce biotope un peu partout sur le globe, essentiellement dans les régions chaudes ou tempérées. La végétation est très variable, pouvant se composer de plantes aquatiques et d’arbres divers. Il n’est pas considéré comme un biome à part entière selon la WWF.
         De par l’humidité et la diversité de végétation, ces zones sont très riches en espèces animales, notamment des reptiles amphibies (crocodiliens, serpents constricteurs), des amphibiens, des oiseaux (aquatique ou non) et des invertébrés divers (insectes, gastéropodes). Diverses espèces de mammifères de toute taille en sont également dépendantes.</p>
        <div>
    </div>
</div>
</div>
</div>
</div>
</section>
<!-- end about-->

<!-- section animaux jungle-->
    <section id="blogs">
    <div class="heaging-3">
     <div class="container">
    <div class="animaux-m"> 
        <h2> Les Animaux Du Marais</h2></div>
     <div class="row">
    <div class="col ">
    <div class="card h-100" style="width: 18rem; ">
      <img src="marais/bec-en-sabot.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="becensabot.php" ><button type="button" class="blogs-btn btn-lg">Bec-en-sabot</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="marais/couleuvre a collier.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="couleuvre.php" ><button type="button" class="blogs-btn btn-lg">Couleuvre a collier</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;" >
      <img src="marais/buffle afrique.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="bufle.php" ><button type="button" class="blogs-btn btn-lg">Buffle d'afrique</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="marais/crocodile.jpg" style="height :250px;"class="card-img-top" alt="...">
      <div class="card-body">
        <a href="crocodile.php" ><button type="button" class="blogs-btn btn-lg">Crocodile</button></a>
      </div>
    </div>
  </div>
     </div>
     <!-- 2eme tour animau-->

     <div class="row" style="margin-top: 65px;">
     <div class="col ">
    <div class="card h-100" style="width: 18rem; ">
      <img src="marais/cerf de virginie.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="cerf.php" ><button type="button" class="blogs-btn btn-lg">Cerf de virginie</button></a>
      </div>
  </div>
     </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="marais/faucon pèlerin.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="fauconp.php" ><button type="button" class="blogs-btn btn-lg">Faucon pèlerin</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;" >
      <img src="marais/raton-laveur.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="raton.php" ><button type="button" class="blogs-btn btn-lg">Raton-laveur</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="marais/flamant rose.jpg" style="height :250px;"class="card-img-top" alt="...">
      <div class="card-body">
        <a href="flamanrose.php" ><button type="button" class="blogs-btn btn-lg">Flamant rose</button></a>
      </div>
    </div>
  </div>
</div>
<!-- 3eme tour -->
<div class="row" style="margin-top: 65px;">
     <div class="col ">
    <div class="card h-100" style="width: 18rem; ">
      <img src="marais/grue royale.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="grueroyale.php" ><button type="button" class="blogs-btn btn-lg">Grue Royale</button></a>
      </div>
  </div>
     </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="marais/marabout-afrique.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="marabou.php" ><button type="button" class="blogs-btn btn-lg">Marabout-d'afrique</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;" >
      <img src="marais/chouette effraie1.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="chouette.php" ><button type="button" class="blogs-btn btn-lg">Chouette</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="marais/rainette de white.jpg" style="height :250px;"class="card-img-top" alt="...">
      <div class="card-body">
        <a href="rainette.php" ><button type="button" class="blogs-btn btn-lg">Rainette de White</button></a>
      </div>
    </div>
  </div>
     </div>
     <!-- 4eme tour -->
     <div class="row" style="margin-top: 65px;">
     <div class="col ">
    <div class="card h-100" style="width: 18rem; ">
      <img src="marais/aligator.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="alligator.php" ><button type="button" class="blogs-btn btn-lg">Aligator</button></a>
      </div>
  </div>
     </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="Marais/salamander-maculée.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="salamander.php" ><button type="button" class="blogs-btn btn-lg">salamandre-maculée</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;" >
      <img src="/images/marais/loutre1.jpg" style="height :250px;" class="card-img-top" alt="...">
      <div class="card-body">
        <a href="loutre.php" ><button type="button" class="blogs-btn btn-lg">Loutre</button></a>
      </div>
    </div>
  </div>
  <div class="col ">
    <div class="card h-100" style="width: 18rem;">
      <img src="/images/marais/la belette.jpg" style="height :250px;"class="card-img-top" alt="...">
      <div class="card-body">
        <a href="belette.php" ><button type="button" class="blogs-btn btn-lg">la belette</button></a>
      </div>
    </div>
  </div>
     </div>
 </section>
    <!--end home section -->
</header>

<script src="/script.javascript/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
<footer>
    <?php require "pages/footer.html";
    ?>
</footer>