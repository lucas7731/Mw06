
<?php
    $mysqli = new mysqli("172.20.21.208","lucas1","azerty","drone");
    foreach($_POST as $c=>$v){
        $$c=$v;}
        
/*$_SESSION["module"]="MW06";
echo $_SESSION['module'];*/
  if(isset($_GET['drone']))
    {
        session_start();
        $req="SELECT count(iddrone) as nbdrone FROM drone";
        $res=$mysqli-> query($req);
        $rep=$res->fetch_assoc();
        $_SESSION['nbdrone']=$rep['nbdrone'];
        
        $res = $mysqli->query("SELECT COUNT(idvol) FROM vol");
        $rep = $res->fetch_assoc();
        $_SESSION["nbvol"] = $rep["COUNT(idvol)"];
                
        $res = $mysqli->query("SELECT COUNT(idutilisateur) FROM utilisateur");
        $rep = $res->fetch_assoc();
        $_SESSION["nbutilisateur"] = $rep["COUNT(idutilisateur)"];
     }
  else 
    {
      $_SESSION['nbdrone']=0;
    }
  echo("vous avez cliqué sur drone");
  header("Location:index.php?drone");
}

    if (isset($inscription)){
        $req="SELECT nom FROM utilisateur WHERE pseudo='$pseudo_utilisateur'";
        $res=$mysqli->query($req);
        $req="INSERT into utilisateur(nom,prenom,email,naissance,pseudo,mdp) values('$nom_utilisateur','$prenom_utilisateur','$adresse_mail_utilisateur','$naissance_utilisateur','$pseudo_utilisateur','$mdp1_utilisateur')";
        echo $req;
        $mysqli->query($req);
        echo "Inscription ok";
        header('location:index.php');
    }
    elseif (isset($connexion))  {
        $pseudo=$_POST['pseudo'];
        $mdp=$_POST['mdp'];
        echo "Tu as saisi: $pseudo-$mdp";
        $req="SELECT pseudo FROM utilisateur WHERE pseudo='$pseudo' AND mdp='$mdp'";
        $res = $mysqli->query($req);
        if($res->num_rows>0){
            echo "Login et Mot de pasee CORRECTS";
            setcookie("pseudo",$_POST["pseudo"],time()+60*60);
            header('location:index.php');
        }
        else{
            echo "Erreur d'authentification";
        }
    }

    else if(isset($_GET["deconnexion"])) {
        setcookie("pseudo", "", time()+3600);
        header("Location:index.php");
    }
    elseif(isset($_GET['profil'])){
        $res = $mysqli->query("SELECT nom,prenom,email FROM utilisateur WHERE pseudo='" . $_COOKIE["pseudo"] . "'");
        $rep = $res->fetch_assoc();
        setcookie("nom", $rep["nom"]);
        setcookie("prenom", $rep["prenom"]);
        setcookie("email", $rep["email"]);
        header("Location:index.php?profil");}
        
        else if(isset($miseajour)){
            $res = $mysqli->query("SELECT idutilisateur FROM utilisateur WHERE pseudo='$pseudo_utilisateur'");
            $ancien_pseudo = $_COOKIE["pseudo"];
            if($res->num_rows == 0 || $ancien_pseudo==$pseudo_utilisateur){
                $res = $mysqli->query("UPDATE utilisateur SET nom='$nom_utilisateur', prenom='$prenom_utilisateur', email='$mail_utilisateur', pseudo='$pseudo_utilisateur' WHERE utilisateur.pseudo='$ancien_pseudo'");
                echo "UPDATE utilisateur SET nom='$nom_utilisateur', prenom='$prenom_utilisateur', email='$adresse_mail_utilisateur', pseudo='$pseudo_utilisateur' WHERE utilisateur.pseudo='$ancien_pseudo'";
                echo "** $mysqli->error **<br/>";
                echo "Modification effectuée: " . $pseudo_utilisateur;
                setcookie("nom", $nom_utilisateur);
                setcookie("prenom", $prenom_utilisateur);
                setcookie("email", $adresse_mail_utilisateur);
                setcookie("pseudo", $pseudo_utilisateur);
                header("Location:index.php");
            }
            else{
                echo "Modification non effectuée: " . $pseudo_utilisateur;
                header("Location:index.php?erreur=PseudoInscription");
            }
        }

       



        $mysqli->close();


?>
