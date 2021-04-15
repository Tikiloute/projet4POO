<?php
ob_start();
?>      
        <!-- Mise en place de tinyMce (script) -->
    <script>
        tinymce.init({
            selector: '#ModifyTextArea'
        });
    </script>
    <a href='article&id=<?= $_GET['id'] ?>' class="btn btn-light text-primary ms-4">Revenir à l'article</a>
    <form action="modify" method="POST" class="card mx-auto col-6" >
        <input type="hidden" name="action" value="editArticle">
        <input type="hidden" name="idArticle" value="<?= $_GET['id'] ?>">
        <textarea placeholder="titre" name="titreArticle"><?= $art['titre'] ?></textarea>
        <textarea id="ModifyTextArea"  placeholder="contenu" style="height: 50vh" name="contenuArticle"><?= $art['contenu']?></textarea>
        <input type="submit" class="btn btn-primary"/>
    </form>

                        <!-- bouton de la modal -->
    <button type="button" class="btn btn-danger" id='myInput' data-bs-toggle="modal" data-bs-target="#myModal">Supprimer l'article</button>

                         <!-- modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation de la suppression de l'article</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Etes-vous sûr de vouloir supprimer cet article ?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <!-- bouton suppression de l'article -->
            <a href="index.php?action=deleteArticle&modify=<?= $_GET['modify']?>" class="btn btn-danger">Supprimer l'article</a>
        </div>
        </div>
    </div>
    </div>
    
<?php 
$contenu = ob_get_clean();
require('template.php');
?>