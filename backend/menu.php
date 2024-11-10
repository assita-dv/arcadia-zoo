<!--start section tableau menu left -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
   <!-- <link rel="stylesheet" href="css/table.css">-->
   <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    
<aside id="sidebar">
<div class="sidebar-title">
                <div class="sidebar-brand">
                <span><i class="fa-solid fa-terminal" title="ARCADIA ZOO"></i></span>
                <span class="label-title">ARCADIA ZOO</span>
            </div>
        </div>
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-table-columns" title="Tableau de bord"></i></span>
                    <a href="/backend/dashboardAmin.php"><span class="label-item ">Tableau de bord</span> </a>
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-chart-line" title="classification"></i></span>
                    <span class="label-item">classification</span> 
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-users-gear" title="Les employée"></i></span>
                   <a href="/backend/User/showUser.php"><span class="label-item"> Les employée</span> </a>
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-plate-wheat" title="L'alimentation"></i></span>
                   <a href="/backend/User/aliment_table.php"><span class="label-item"> L'alimentation animaux</span> </a>
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-hippo" title="Animaux"></i></span>
                    <a href="/backend/animaux.table/animaux.php"><span class="label-item"> Les animaux</span> </a>
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-list-check" title="Services"></i></span>
                    <a href="/backend/sevices-bdd.php/servicebdd.php"><span class="label-item">Services</span> </a>
                </li>
            
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-calendar-days" title="Réglage"></i></span>
                    <a href="../backend/les-horaire-du-zoo/zoo-horaire.php"><span class="label-item">Hohaire du zoo</span> </a>
                
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-regular fa-address-book" title="Messagerie"></i></span>
                    <span class="label-item">Messagerie</span> 
                </li>
                <li class="sidebar-list-item">
                    <span><i class="fa-solid fa-message" title="Avis de visiteurs"></i></span>
                    <a href="/backend/avis-avis/avis.php"><span class="label-item">Avis de visiteurs</span> </a>
                </li>
                <!-- start lien double -->
        <li class="sidebar-list-item">
                    <div class="dropdown">
  <a class="btn dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fa-solid fa-user-nurse"title="Rapport vétérinaire" ></i>
  Rapport vétérinaire
  </a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="/backend/admin/rapport_table_animaux.php">Rapport animaux</a></li>
    <li><a class="dropdown-item" href="/backend/admin/table-rapport-habitat.php">Rapport habitat</a></li>
  </ul>
</div>
                 <!-- fin rapport habitat -->
            </ul>
        </aside>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>