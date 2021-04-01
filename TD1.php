<?php        
       
    $toto="bonjour";
    $tab=array(10,18,15);
    $piloteNum=array(25,"Jean","Jacques");
    $nom=$piloteNum[2];
    $prenom=$piloteNum[1];
    echo "Le prenom est $prenom et le nom est $nom<br/>";
    foreach( $piloteNum as $valeur)
    {
        echo "$valeur<br/>";
    }
    $piloteAssoc=array("age"=>25,"prenom"=>Jean,"nom"=>Jacques);
    $nom=$piloteAssoc["nom"];
    $prenom=$piloteAssoc["prenom"];
    //echo "Le prenom est $prenom et le nom est $nom<br/>";
    foreach( $piloteAssoc as $valeur)
    {
        echo "$valeur<br/>";
    }


?>