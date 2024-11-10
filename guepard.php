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
     <div class="description-about-guepard text-center text-white">
    <div class="description-about-content">
        <h1>GUÉPARD</h1>
    </div>
</div>
     </section>
<!-- end section home-->
 <section class="primary-bg">
    <div class="container" style="max-width: 1200px;" >
    <div class="row details fram-space-before-medium" style="width: 100%;">
        <div class="decrire">
        <h3>GUÉPARD</h3>
        <p>Le guépard (Acinonyx jubatus) est un grand félin que l’on trouve dans certaines savanes <br>et zones désertiques d’Afrique. Il est l’animal terrestre le plus rapide du monde. <br>Carnivore, il se nourrit des différentes proies que sa vitesse <br>et sa taille lui permettent de chasser.
         Malheureusement, cet animal emblématique de l’Afrique est en grand danger d’extinction. </p>
    </div>
</div>
    <div class="row fram-space-before-medium fram-space-after-extra-large">
        <div class="col-lg-8">
   <img src="/savane/guépard.jpg"  style="width: 85%; height: 60%; margin-top: 30px;"alt=""  >
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
                        <p class="value">Il se nourrit donc essentiellement d’antilopes assez petites et rapides comme les différentes gazelles (principalement gazelle de Thomson), les springboks, les impalas, les petits koudous ainsi que les ourébis et les petits gnous. Il complète son alimentation avec d’autres proies plus diverses comme les autruches, les lapins, les lièvres et les phacochères.</p>
                      </li>
                    
                    <li><i class="fa-solid fa-earth-africa" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                    <h6 class="category">Habitat</h6> 
                        <p class="value">Le guépard vit dans les savanes et les steppes tropicales à semi-désertiques.</p>
                        
                      </li>
    
                     <li><i class="fa-solid fa-paw" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">Classe</h6> 
                        <p class="value">Mammifère placentaire </p>
                      </li>

                      <li><i class="fa-solid fa-user-nurse" style="width: 48px; height: 48px;"></i>
                    <div class="text-wrap">
                        <h6 class="category">l’avis du vétérinaire.</h6>
                        <p class="value">Le guépard est en bonne santé.</p>
                    
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