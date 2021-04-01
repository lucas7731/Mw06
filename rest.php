<?php
$mysqli = new mysqli("172.20.183.208","lucas1","azerty","drone");
$req="select nom,prenom from utilisateur";
$res = $mysqli->query($req);
$rep = $res->fetch_assoc();
print_r($rep);
echo "<table><tr><th>Nom</th><th>Prénom</th></tr>";
while($rep = $res->fetch_assoc()){
echo "<tr><td>" . $rep["nom"] . "<td/><td>" . $rep["prenom"] . "<td/><tr/>";
}
echo "</table>";
?>
<form action="rest.php" methode="get">
    <input type="texte" name="pseudo"/>
    <input type="submit" name="validFrom"/>
</form>

<?php
if (isset($_GET['validForm'])){
    $pseudo=$_GET['pseudo'];
    echo "le pseudo vaut ".$pseudo;
}
?>
