function visiteur() {
    alert("bienvenue sur mon site");
    
     numero = Math.floor(Math.random()*1000);
    var texte = "tu es le visiteur n°";
    alert (texte + " " + numero );
}	
    var p_footer= document.getElementById("p_footer");
   p_footer.addEventListener('dblclick', visiteur);
  
  
  
  
  
  
  
   document.getElementById("titre_header").addEventListener("mouseover", ChangerTitre);
 function ChangerTitre()
    {
    var txt = document.getElementById("titre_header").innerHTML;
    if(txt=="mes dev! Web en SNIR")
    {
        document.getElementById("titre_header").innerHTML="Par Lucas Mathis";
        setTimeout(ChangerTitre,1000);
    }    
    else
    {
        document.getElementById("titre_header").innerHTML="mes dev! Web en SNIR";
    }
 }




function ChangerCouleurBleu ()
{  
    console.log("Changement de couleur");
    document.getElementById("titre_header").style.backgroundColor = "#2874a6";
    document.getElementById("nav").style.backgroundColor = "#2874a6";
    document.getElementById("p_footer").style.backgroundColor = "#2874a6";
    document.getElementById("aside").style.backgroundColor = "#2874a6";
}


document.getElementById("theme_bleu").addEventListener('click', ChangerCouleurBleu);

function ChangerCouleurOrange ()
{  
    console.log("Changement de couleur");
    document.getElementById("titre_header").style.backgroundColor = "#cc5500";
    document.getElementById("nav").style.backgroundColor = "#cc5500";
    document.getElementById("p_footer").style.backgroundColor = "#cc5500";
    document.getElementById("aside").style.backgroundColor = "#cc5500";
}   
    
    
document.getElementById("theme_orange").addEventListener('click', ChangerCouleurOrange);

function ChangerCouleurGris ()
{  
    console.log("Changement de couleur");
    document.getElementById("titre_header").style.backgroundColor = "#beaeae";
    document.getElementById("nav").style.backgroundColor = "#beaeae";
    document.getElementById("p_footer").style.backgroundColor = "#beaeae";
    document.getElementById("aside").style.backgroundColor = "#beaeae";
}   
    
    
document.getElementById("theme_gris").addEventListener('click', ChangerCouleurGris);

function changerSection()
{
  
  if(this.id == "nav_mon_cv")
  {
    document.getElementById("mon_cv").style.display = "block";
    document.getElementById("Inscription").style.display = "none";
    document.getElementById("Connexion").style.display = "none";
  }
  else if(this.id == "nav_inscription")
  {
    document.getElementById("mon_cv").style.display = "none";
    document.getElementById("Inscription").style.display = "block";
    document.getElementById("connexion").style.display = "none";
  }
  else if(this.id == "nav_connexion")
  {
    document.getElementById("mon_cv").style.display = "none";
    document.getElementById("Inscription").style.display = "none";
    document.getElementById("Connexion").style.display = "block";
  }
}

document.getElementById("nav_inscription").addEventListener ('click', changerSection);
document.getElementById("nav_mon_cv").addEventListener ('click', changerSection);
document.getElementById("nav_connexion").addEventListener ('click', changerSection);

var mdp1=document.getElementById("mdp1").value;
var mdp2=document.getElementById("mdp2").value;
var maj=0; var min=0; var num=0;

function validationFormulaireInscription()
{
  //alert("Validation du formulaire avant envoi");
  if(document.getElementById("mdp1").value != document.getElementById("mdp2").value )
  {
    alert("Les 2 mots de passe sont différents");
    //console.debug(this);
    //console.debug(event);
    event.preventDefault(); // Annule la propagation de l'événement -> dans notre cas, annulation de l'envoi du formulaire
  }
  if(validationDuMotDePasse() == false)
  {
    alert("Le mot de passe n'est pas conforme aux règles de sécurité de notre site.");
    event.preventDefault();
  }
}

function validationDuMotDePasse()
{
    var mdp = document.getElementById("mdp1").value;
    var nbMajuscules=0, nbMinuscules=0, nbChiffres=0, nbSpeciaux=0;
    for(var i=0 ; i<mdp.length ; i++)
    {
      if(mdp.charAt(i) >= 'A' && mdp.charAt(i) <= 'Z')
        nbMajuscules++;
      else if(mdp.charAt(i) >= 'a' && mdp.charAt(i) <= 'z')
        nbMinuscules++;
      else if(mdp.charAt(i) >= '0' && mdp.charAt(i) <= '9')
        nbChiffres++;
      else
        nbSpeciaux++;
    }
    if( (mdp.length >= 8) && document.getElementById("mdp_longueur").classList.contains('rouge') )
    {
      document.getElementById("mdp_longueur").classList.add('vert');
      document.getElementById("mdp_longueur").classList.remove('rouge');
    }
    else if ( (mdp.length < 8) && document.getElementById("mdp_longueur").classList.contains('vert') )
    {
      document.getElementById("mdp_longueur").classList.add('rouge');
      document.getElementById("mdp_longueur").classList.remove('vert');
    }
    if( (nbMajuscules >= 1) && document.getElementById("mdp_majuscule").classList.contains('rouge') )
    {
      document.getElementById("mdp_majuscule").classList.add('vert');
      document.getElementById("mdp_majuscule").classList.remove('rouge');
    }
    else if ( (nbMajuscules == 0) && document.getElementById("mdp_majuscule").classList.contains('vert') )
    {
      document.getElementById("mdp_majuscule").classList.add('rouge');
      document.getElementById("mdp_majuscule").classList.remove('vert');
    }
    if( (nbMinuscules >= 1) && document.getElementById("mdp_minuscule").classList.contains('rouge') )
    {
      document.getElementById("mdp_minuscule").classList.add('vert');
      document.getElementById("mdp_minuscule").classList.remove('rouge');
    }
    else if ( (nbMinuscules == 0) && document.getElementById("mdp_minuscule").classList.contains('vert') )
    {
      document.getElementById("mdp_minuscule").classList.add('rouge');
      document.getElementById("mdp_minuscule").classList.remove('vert');
    }
    if( (nbChiffres >= 1) && document.getElementById("mdp_chiffre").classList.contains('rouge') )
    {
      document.getElementById("mdp_chiffre").classList.add('vert');
      document.getElementById("mdp_chiffre").classList.remove('rouge');
    }
    else if ( (nbChiffres == 0) && document.getElementById("mdp_chiffre").classList.contains('vert') )
    {
      document.getElementById("mdp_chiffre").classList.add('rouge');
      document.getElementById("mdp_chiffre").classList.remove('vert');
    }
    if( (nbSpeciaux >= 1) && document.getElementById("mdp_speciaux").classList.contains('rouge') )
    {
      document.getElementById("mdp_speciaux").classList.add('vert');
      document.getElementById("mdp_speciaux").classList.remove('rouge');
    }
    else if ( (nbChiffres == 0) && document.getElementById("mdp_speciaux").classList.contains('vert') )
    {
      document.getElementById("mdp_speciaux").classList.add('rouge');
      document.getElementById("mdp_speciaux").classList.remove('vert');
    }

    if( (mdp.length >=8) && (nbMajuscules >= 1) && (nbMinuscules >= 1) && (nbChiffres >= 1) && (nbSpeciaux >= 1) )
      return true;
    return false;
}

var LancerVideo= false;
function boutonplay(){
    
    console.log (this.id);
    if (LancerVideo){
        document.getElementsByTagName("video")[0].pause();
        LancerVideo=false;
        document.getElementById("boutonplay").src="play.png";

    }
    else{
        document.getElementsByTagName("video")[0].play();
        LancerVideo=true;
        document.getElementById("boutonplay").src="pause.png";
    }
}


var videostop = document.getElementById("video");
function Stopvideo(){
    videostop.pause();
    videostop.currentTime=0;
}

  document.getElementById("boutonstop").addEventListener("click",Stopvideo);
  document.getElementById("boutonplay").addEventListener("click",boutonplay);