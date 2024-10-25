<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
</head>
<body>
<!-- start section header-->
 <?php require "header.php" ; ?>

<!--end section header-->

<!-- start menu right-->
<?php require "menu.php" ; ?>      
 <!-- end menu right-->

<!--start section menu cards -->
        <main class="main-container">
            <div class="main-title">
                <p class="fw-600">Tableau de bord</p>
            </div>
            <div class="main-cards">
                <div class="card">
                <div class="card-inner">
                    <p class="text-yellow">Les Avis</p>
                    <span><i class="fa-solid fa-message text-yellow" title="Les employée"></i></span>
                </div>
                <span class="text-primary fw-600">20</span>
            </div>
            <div class="card">
                <div class="card-inner">
                    <p class="text-red">Rapport vétérinaire</p>
                    <span><i class="fa-solid fa-user-nurse text-red" title="Les employée"></i></span>
                </div>
                <span class="text-primary fw-600">10</span>
            </div>
            <div class="card">
                <div class="card-inner">
                    <p class="text-turc">Les Annimaux</p>
                    <span><i class="fa-solid fa-hippo text-turc" title="Les employée"></i></span>
                </div>
                <span class="text-primary fw-600">150</span>
            </div>
            <div class="card">
                <div class="card-inner">
                    <a href="/User/showUser.php"><p class="text-indigo">Les employée</p></a>
                    <span><i class="fa-solid fa-users-gear text-indigo" title="Les employée"></i></span>
                </div>
                <span class="text-primary fw-600">104</span>
            </div>
            </div>

            <div class="charts">
                <div class="charts-card">
                    <p class="chart-title">Les Annimaux les plus visitée</p>
                    <div id="chart-bar"></div>
                </div>
                <div class="charts-card">
                    <p class="chart-title">Les visite</p>
                    <div id="chart-area"></div>
                </div>
            </div>
         </main>
</div>
        </div>
    </div>
    <!--end section menu cards-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src=""></script> 
    <script src="/backend/dossier.js/script.js"></script>
</body>
</html>