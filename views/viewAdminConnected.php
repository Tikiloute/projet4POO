<?php
ob_start();
if($_SESSION['connected'] === true){
?>
    <div class='alert alert-success text-center'>Vous êtes connecté</div>
<?php
}
?>
        <script>
            tinymce.init({
                selector: '#mytextarea',
            });
        </script>
        <div >
            <h2 class="write-article intro">Bonjour <?= $_SESSION['identifiant']?></h2>
            <br>
            <hr class="hr">
            <br>
            <h3 class="write-article intro">Créer votre article ici</h3>
            <br>
            <form action="#" method="POST" class="card mx-auto col-6">
                <input type="text" placeholder="Titre" name="titre" class="card-title"/>
                <textarea id="mytextarea" placeholder="Contenu" name="contenu"></textarea>
                <input type="submit" class="btn btn-primary" />
            </form>
        </div>
            <br>
        <hr class="hr">
            <br>
<?php
        for($i = 0; $i < $count[0]; $i++){
?>
            <div class="card mx-auto mb-3 col-6">
            <div class="card-body shadow-lg text-center">
                <h5 class="card-title"><?= $reportComment[$i]['identifiant'] ?></h5>
                <hr class="hr">
                <p class="card-text mt-2"><?= 'A écrit: "'.$reportComment[$i]['commentaire'].'"'?></p>
                <hr class="hr">
                <p class="card-text mt-2"><?= "Le ".$reportComment[$i]['date']?></p>
                <hr class="hr">
                <p class="card-text mt-2">Concernant l'article: <a href="article&id=<?= $reportComment[$i]['idArticle']?>" class="text-primary"><?= $reportComment[$i]['nomArticle'] ?></a></p>
                <hr class="hr">
                <p class="card-text mt-2 mb-4">Nombre de signalement <span class="badge bg-danger">0-1-2-3</span></p>
                <a href="validateReportComment&id=<?= $reportComment[$i]['id']?>" class="btn btn-success">Valider le commentaire</a>
                <a href="deleteReportComment&id=<?= $reportComment[$i]['idCommentaire']?>" class="btn btn-danger">Supprimer le commentaire</a>
            </div>
            </div>
            <br>
            <hr class="hr">
            <br> 
<?php 
        }
$contenu = ob_get_clean();
require_once('template.php');