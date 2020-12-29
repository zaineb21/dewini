    <?php
include ("../entites/rdv.php");
include "../core/rdvC.php";


       
if (isset($_POST['date'])  && isset($_POST['heure']) && isset($_POST['info']) && isset($_POST['specialité']) ) 
{
  
 ;
  $specialité=$_POST['specialité'];

 
  $heure=$_POST['heure'];;
 
  $info=$_POST['info'];
  $date=$_POST['date'];
 
$rdv=new rdv($info,$specialité,$date,0,$heure,0);


$rdvC=new rdvC();
$rdvC->ajouterrdv($rdv);
 
header('Location: affichage.php');


}
else 
{
  echo "verifier les champs";
}


?>


    
