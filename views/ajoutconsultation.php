<?php
include ("../entites/consultation.php");
include "../core/consultationC.php";



if (isset($_POST['nomdoc']) && isset($_POST['numOrd']) && isset($_POST['date'])  && isset($_POST['maladie']) && isset($_POST['url']) )
{

  $nomdoc=$_POST['nomdoc'];
  $numOrd=$_POST['numOrd'];
  $date=$_POST['date'];
  $maladie=$_POST['maladie'];;
$url=$_POST['url'];;
$consultation=new consultation($numOrd,$date,$nomdoc,$maladie,$url);
$consultationC=new consultationC();
$consultationC->ajouterconsultation($consultation);

header('Location: showconsultation.php');


}
else
{
  echo "verifier les champs";
}


?>
