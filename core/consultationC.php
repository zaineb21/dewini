<?php
include "config.php";
/**
 * 
 */

 class consultationC 
{
    
function ajouterconsultation($consultation)
    { 
    $sql="INSERT INTO consultation (numOrd,dateCon,nomDoc,maladie,url) VALUES(:numOrd,:dateCon,:nomDoc,:maladie,:url)";
    $db = config::getConnexion();
        try{

        $req=$db->prepare($sql);        
        $numOrd=$consultation->getnumOrd();
        $dateCon=$consultation->getdate();
        $nomDoc=$consultation->getnomDoc();
        
        $maladie=$consultation->getmaladie();
        $url=$consultation->geturl();
    
        $req->bindValue(':numOrd',$numOrd);
        $req->bindValue(':dateCon',$dateCon);
        $req->bindValue(':nomDoc',$nomDoc);

        $req->bindValue(':maladie',$maladie);
        $req->bindValue(':url',$url);
        
            $req->execute();
            
        }
        catch (Exception $e){

            echo 'Erreur: '.$e->getMessage();
        }
    }

   function afficherconsultation()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM consultation";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $consultation= $req->fetchALL();
        return $consultation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function afficherconsultation7()
    {
        $db = config::getConnexion();
            $sql="SELECT *FROM consultation order by nb DESC LIMIT 0,12 ";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $consultation= $req->fetchALL();
        return $consultation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
    }
    function Supprimerconsultation($numOrd){
        $sql="DELETE  from consultation where numOrd=:numOrd";
        $db = config::getConnexion();
        
        try{
        $req=$db->prepare($sql);
                $req->bindValue(':numOrd',$numOrd);

        $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

function modifierconsultation($consultation,$r){
        $sql="UPDATE consultation SET  numOrd=:numOrd,dateCon=:dateCon,nomDoc=:nomDoc,maladie=:maladie,url=:url WHERE numOrd=:r";
        $db = config::getConnexion();

        try{
            $req=$db->prepare($sql);        
            $numOrd=$consultation->getnumOrd();
            $dateCon=$consultation->getdate();
            $nomDoc=$consultation->getnomDoc();
            $maladie=$consultation->getmaladie();
            $url=$consultation->geturl();
            
             
             $req->bindValue(':r',$r);
             $req->bindValue(':numOrd',$numOrd);
             $req->bindValue(':dateCon',$dateCon);
             $req->bindValue(':nomDoc',$nomDoc);
            
             $req->bindValue(':maladie',$maladie);
             $req->bindValue(':url',$url);
            
            $req->execute();

        ob_start();
       
     
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
        }


function recherche($search_value){
        $db = config::getConnexion();
            $sql="select * from consultation where  like '%$search_value%' or maladie like '%$search_value%' or dateCon like '%$search_value%' or nomDoc like '%$search_value%' or url like '%$search_value%' or numOrd like '%$";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $consultation= $req->fetchALL();
        return $consultation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}
function trier(){
        $sql="SElECT * From employe e inner join formationphp.employe a on e.numOrd= a.numOrd";
        
       $db = config::getConnexion();
            $sql="SElECT * From consultation ORDER BY dateCon";

        try{
        $req=$db->prepare($sql);
        $req->execute();
        $consultation= $req->fetchALL(PDO::FETCH_OBJ);
        return $consultation;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }    
}}
?>
    

