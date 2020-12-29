 <?php include "../core/rdvC.php";
 $rdv1C=new rdvC();
 if (isset($_POST['reserver'])){
 	$id=$_POST['id'];
 $liste =$rdv1C->reserver($id);}
?>