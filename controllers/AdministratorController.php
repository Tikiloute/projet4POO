<?php

namespace Controllers;

class AdministratorController extends Controller
{
    public function connection(): void
    {
        if(!empty($_POST['identifiant']) && !empty($_POST['password'])){
            $username = $_POST['identifiant'];
            $password = $_POST['password'];
            $_SESSION['identifiant'] = $username;
            $_SESSION['password'] = $password;
        }
        $adm = $this->admin->adminProfile();
        if(!empty($_POST['identifiant']) && !empty($_POST['password']) && empty($_SESSION['identifiant']) && empty($_SESSION['password'])){
            require_once('views\viewAdminDisconnected.php');
        }elseif(!empty($_SESSION['identifiant']) && !empty($_SESSION['password'])){
            if($_SESSION['identifiant'] === $adm["identifiant"] && password_verify($_SESSION['password'], $adm["password"]) === true){
                $_SESSION['connected'] = true;
                $this->readReportComment();
                $this->writeArticle();
            }else{
                require_once('views\viewAdminDisconnected.php');
                echo "<div class='alert alert-danger text-center'>Identifiant et / ou mot de passe érroné(s)!</div>";
            }
        }else{
            require_once('views\viewAdminDisconnected.php');
        }
    }

    public function writeArticle(): void
    {
        if (!empty($_POST['titre']) && !empty($_POST['contenu'])){
            $this->article->newArticle($_POST['titre'], $_POST['contenu']);
            echo "<div class='alert alert-success text-center'>Votre article a bien été envoyé</div>";
        }
    }

    public function logout(): void
    {
        $this->admin->logout();
    }

    public function reportComments(): void
    {
        $this->report->report($_GET['identifiant'],$_GET['comment'], $_GET['idComment'], $_GET['date'], $_GET['articleName'], $_GET['id'] );
        header("Location: article&id=".$_GET['id']."&report=ok");
        exit();
    }

    public function readReportComment() : void
    {
        $adm = $this->admin->adminProfile();
        $reportComment = $this->report->readAll();
        $count = $this->report->count();
        require_once('views\viewAdminConnected.php');
    }

}