<?php
include('db_connexion.php');
    //suuprimer
    if(isset($_POST['delete']))
    {
        $requete= $DB->query("DELETE FROM user WHERE : id = id");
        $_SESSION['flash_message'] = "Ce compte à été supprimé";
        exit;
    }
    
?>