<?php 
for($i = 0; $i < 3; $i++){
?>
<div class="card text-center " style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?= $articles[$i]['titre']  ?></h5>
    <p class="card-text"><?= $articles[$i]['contenu']?></p>
    <a href="index.php?action=article&id=<?= $articles[$i]['id']?>" class="btn btn-primary">Aller sur l'article</a>
  </div>
</div>
    
<?php
}