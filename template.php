    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Orelega+One&family=Roboto+Mono:ital,wght@0,100;0,200;1,100;1,200&family=Special+Elite&family=Ubuntu+Mono&family=Zen+Dots&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Orelega+One&family=Roboto+Mono:ital,wght@0,100;0,200;1,100;1,200&family=Ubuntu+Mono&family=Zen+Dots&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
        <script src="https://cdn.tiny.cloud/1/vvi3gap76cxc2s4s3siyjb12op2d8vd1cxibgyg9cjpv09bf/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <title>Mon blog</title>
        <link type="text/css" rel="stylesheet" href="style.css">

    </head>
    <body class="d-flex flex-column">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-5 color-navBar">
            <div class="container-fluid">
                <a class="navbar-brand color-navBar titreAccueil" href="accueil">Blog de Jean Forteroche</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="true" href="accueil">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="articles&page=1">Articles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contact">Me contacter</a>
                        </li>
                    </ul>
                </div>
            <?php if(!empty($_SESSION['connected']) && $_SESSION['connected'] === true){ ?>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="admin&page=1">Gérer votre site</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disconnect ml-5" href="logout">Se déconnecter</a>
                        </li>
                    </ul>
                </div>
                    <?php } else { ?>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li>
                            <a class="nav-link text-white" href="admin">Se connecter</a>
                        </li>
                    </ul>
                </div>
                    <?php } ?>
            </div>
            </nav>
        </header>
        <div  class='mt-2 text-center'>
            <?php 
                if(!empty($contenu)){
                    echo $contenu;
                }; 
            ?>
        </div> 
        <div class='mt-2 text-center'>
            <?php      
                if(!empty($content)){
                    echo $content;
                }
            ?>
        </div>
        <div class='mt-auto text-center'>
            <?php      
                if(!empty($container)){
                    echo $container;
                }
            ?>
        </div>
    <footer class='bg-primary text-white'>
        <div id="copyright">www.Celemma.eu © All rights reserved</div>
    </footer>        
    </body>
    </html>

