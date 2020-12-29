    <?php
include "config.php";
/**
 * 
 */

 class rdvC 
{
	
function ajouterrdv($rdv)
	{ 
 	$sql="INSERT INTO `rdv`( `specialite`, `datee`, `heure`, `informations`, `disponibilite`) VALUES (:specialite,:datee,:heure,:informations,:disponibilite)";
 	$db = config::getConnexion();
 		try{

        $req=$db->prepare($sql);		
        $specialité=$rdv->getspecialité();
        $datee=$rdv->getdate();
        $heure=$rdv->getheure();
        $informations=$rdv->getinformations();
      $dispo=0;
		$id=0;
		$req->bindValue(':specialite',$specialité);
		$req->bindValue(':datee',$datee);
		$req->bindValue(':heure',$heure);
	    $req->bindValue(':informations',$informations);
		$req->bindValue(':disponibilite',$dispo);
		
            $req->execute();
            
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
	}

   function afficherrdv()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM rdv";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $rdv= $req->fetchALL();
        return $rdv;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherrdv7()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM rdv order by nb DESC LIMIT 0,12 ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $rdv= $req->fetchALL();
        return $rdv;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function Supprimerrdv($idRdv){
        $sql="DELETE  from rdv where idRdv=:idRdv";
        $db = config::getConnexion();
        
        try{
        $req=$db->prepare($sql);
                $req->bindValue(':idRdv',$idRdv);

        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }



function modifierrdv($rdv,$r){
        $sql="UPdatee rdv SET  idRdv=:idRdv,specialité=:specialité,datee=:datee,heure=:heure,informations=:informations,disponibilité=:disponibilité,=: WHERE idRdv=:r";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);        
            $idRdv=$rdv->getidRdv();
            $specialité=$rdv->getspecialité();
            $datee=$rdv->getdatee();
            $heure=$rdv->getheure();
            $informations=$rdv->getinformations();
            $disponibilité=$rdv->getdatee_naiss();
             $num_permis=$rdv->getNum_permis();
             $req->bindValue(':r',$r);
             $req->bindValue(':idRdv',$idRdv);
             $req->bindValue(':specialité',$specialité);
             $req->bindValue(':datee',$datee);
                          $req->bindValue(':heure',$heure);
             $req->bindValue(':informations',$informations);
             $req->bindValue(':disponibilité',$disponibilité);
            $req->execute();

        ob_start();
       
       exit();
       
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }
function reserver($r){
        $sql="UPDATE rdv SET  disponibilite=1 WHERE idRdv=:r";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);        
            
             $req->bindValue(':r',$r);
           
            $req->execute();

        ob_start();
       
       exit();
       
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }

function recherche($r){
        $db = config::getConnexion();
            $sql="select * from rdv where datee=:r and disponibilite=0";

        try{
        $req=$db->prepare($sql);
        $req->bindValue(':r',$r);
        $req->execute();
        $rdv= $req->fetchALL();
        return $rdv;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function dispo(){
        $db = config::getConnexion();
            $sql="select * from rdv where disponibilite=0";

        try{
        $req=$db->prepare($sql);
      
        $req->execute();
        $rdv= $req->fetchALL();
        return $rdv;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        //$sql="SElECT * From employe e inner join formationphp.employe a on e.idRdv= a.idRdv";
        
       $db = config::getConnexion();
            $sql="SElECT * From rdv ORDER BY specialité";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $rdv= $req->fetchALL(PDO::FETCH_OBJ);
        return $rdv;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}}
?>
    
