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
     <div class="description-about-faucon text-center text-white">
    <div class="description-about-content">
        <h1>FAUCON PÈLERIN</h1>
    </div>
</div>
     </section>
<!-- end section home-->
 <section class="primary-bg">
    <div class="container" style="max-width: 1200px;" >
    <div class="row details fram-space-before-medium" style="width: 100%;">
        <div class="decrire">
        <h3>FAUCON PÈLERIN</h3>
        <p>Le faucon pèlerin (Falco peregrinus) est un rapace de taille moyenne de la famille des Falconidés. <br> On le trouve dans une grande variété d’habitat à végétation peu dense, <br> dans pratiquement toutes les régions du globe.  <br>Carnivore, il se nourrit principalement d’autres oiseaux mais possède également quelques proies terrestres. </p>
    </div>
</div>
    <div class="row fram-space-before-medium fram-space-after-extra-large">
        <div class="col-lg-8">
   <img src="/marais/faucon pèlerin.jpg"  style="width: 700px; height: 500px; margin-top: 30px;"alt=""  >
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
                        <p class="value">Le faucon pèlerin est un redoutable chasseur, dont les proies varient selon la région. Il se nourrit principalement d’oiseaux plus petits (mouettes, pigeons, corbeaux, canards, chouettes, oiseaux chanteurs …) mais également de plus grands volatiles comme les hérons et autres échassiers et les oies.
                         Il complète également son alimentation de petits mammifères (lemmings, campagnols, lièvres, musaraignes, chauves-souris) et de lézards.</p>

                      </li>
                    
                    <li><i class="fa-solid fa-earth-africa" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">Habitat</h6> 
                        <p class="value"> Le faucon pèlerin vit dans pratiquement tous les habitats, notamment les taïgas, les forêts tempérées, les forêts tropicales sèches ainsi que les prairies tempérées, les toundras, les savanes tropicales, les déserts peu arides, les marais, les côtes et les villes.
                        </p>
                      </li>
    
                     <li><i class="fa-solid fa-paw" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">Classe</h6> 
                        <p class="value">Aves</p>
                      </li>

                      <li><i class="fa-solid fa-user-nurse" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">l’avis du vétérinaire.</h6>
                        <p class="value">Faucon pelerin est en excellente santé.</p>
                    
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