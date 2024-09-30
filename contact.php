<?php
    if (isset($_POST['message'], $_POST['sujet'])) {
        $retour = mail('destinataire@free.fr', 'Envoi depuis la page Contact', $_POST['message'], 'From: webmaster@monsite.fr' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    } else{
        echo 'Erreur, votre message n\a pas été envoyé  ';
    }
    ?>


<section class="cantact-form">
    <h6 class="heading-contact"> contactez-nous</h6>
    <div class="container " >
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <form class="form-origin" method="$_POST">
                    <div class="row">
                        <div class=" col-lg-6 col-md-12">
                        <div class="mb-3">
                        <input type="text" name="sujet" class="form-control" placeholder="sujet*"  aria-describedby="emailHelp">
                        </div>
                        </div>
                        <div class=" col-lg-6 col-md-12">
                        <div class="mb-3">
                        <input type="amail" name="email" class="form-control" placeholder="Adress Email*" aria-describedby="emailHelp">
                        </div>
                      </div>
                        <div class="row">
                        <div class="col-lg-12">
                        <div class="mb-3">
                       <textarea class="form-control" name="message" placeholder="Messages" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        </div>
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                         </div>
                    </div>
                    </div>
                    <div class="d-grid gap-2 d-md-block">
  <button class="btn btn-dark" type="submit">Envoyer</button>
</div>
     </form>
    </div>
    </div> 
</section>