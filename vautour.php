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
 <!-- debut home-hiner section -->
 <section class="home-description" id="description">
     <div class="description-about-vautour text-center text-white">
    <div class="description-about-content">
        <h1>VAUTOUR FAUVE</h1>
    </div>
</div>
     </section>
<!-- end section home-->
 <section class="primary-bg">
    <div class="container" style="max-width: 1200px;" >
    <div class="row details fram-space-before-medium" style="width: 100%;">
        <div class="decrire">
        <h3>VAUTOUR FAUVE</h3>
        <p>Le vautour fauve (Gyps fulvus), anciennement griffon, est un grand oiseau de la famille des Accipitridés. <br>On le trouve à la fois dans les zones ouvertes rocheuses ou légèrement boisées dans divers pays d’Europe, <br> d’Asie et d’Afrique du Nord. Exclusivement charognard, il se nourrit de cadavres d’animaux divers.

 </p>
    </div>
</div>
    <div class="row fram-space-before-medium fram-space-after-extra-large">
        <div class="col-lg-8">
   <img src="/savane/vautour percnoptère.jpg"  style="width: 85%; height: 60%; margin-top: 30px;"alt=""  >
        </div>
<div class="col-lg-4">
    <div class="card attraction features">
        <!-- stylr background color: ; -->
         <div class="content">
            <div class="icon-list">
                <ul>
                    <li><i class="fa-solid fa-magnifying-glass" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">Nourriture et proies</h6>
                        <p class="value"> Le vautour fauve se nourrit des carcasses de différents animaux. Il s’attaque principalement aux cadavres des grands herbivores sauvages (mouflons, chamois, bouquetins) ou domestiques (chèvres, vaches, moutons, chevaux). Il préfère se nourrir de chair molle et fraîche, laissant les parties plus dures à d’autres charognards. </p>

                      </li>
                    
                    <li><i class="fa-solid fa-earth-africa" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                    <h6 class="category">Habitat</h6> 
                        <p class="value">On trouve le vautour fauve dans les zones désertiques, dans les falaises, les prairies de montagne et d’autres grandes étendues dégagées (savanes, plaines), de climat tempéré ou tropical. On l’observe également dans les bois méditerranéens.</p>
                        
                      </li>
    
                     <li><i class="fa-solid fa-paw" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">Classe</h6> 
                        <p class="value">Aves (Oiseaux)</p>
                      </li>

                      <li><i class="fa-solid fa-user-nurse" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">l’avis du vétérinaire.</h6>
                        <p class="value">Le Vautour est en bonne santé.</p>
                      </li>
                  </div>
                 </div>
                </div>
                </ul>
              </div>
            </div>
         </div>
    </div>
</div>
</div>
</div>

  <a href="lesAnimaux.php"><button class="voirleanimaux-btn">Voir plus d'Animaux</button></a>
 </section>



   
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