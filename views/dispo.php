<!DOCTYPE html>
<html>
    <head>
    	<meta charset='utf-8'>
    	<title> Afficher les rendez-vous d'un jour donné </title>
    	<script type="text/javascript" src="./contents/jquery/jquery-3.4.1.min.js"></script>
    	<script src="./contents/bootstrap/js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="./contents/bootstrap//css/bootstrap.min.css" />
         <link rel="stylesheet" href="../a/style.css" />
        <style>
        </style>
    </head>
    <body>

<div class="login-box-delete">
<img src="../a/schedule.png" class="avatar">

      <br>
<form  method="POST" action="dispo.php">
  <div class="form-row">
   
      <br>
  </div>

 <button class="button" type="submit" name="dispo" id="btn_afficher">Afficher</button>
</form>

 </div>
<script src="../a/showRdvSpec.js"></script>

 <?php include "../core/rdvC.php";
 $rdv1C=new rdvC();
 if (isset($_POST['dispo'])){
 $liste =$rdv1C->dispo();
?>
                        <table class="table table-bordered mb-0 text-nowrap" id="myTable">
                          <tr class="bg-primary">
                            <th  onclick="sortnumber(0)">idRDV</th>
                            <th  onclick="sortTable(1)">specialite</th>
                            <th onclick="sortTable(2)">date</th>
                            <th  onclick="sortTable(3)">information</th>
                            <th  onclick="sortTable(4)">dispo</th>
                                              
              
                          </tr>
                          <tbody id="myTable">

    <?PHP

    foreach($liste as $row){
    ?>
 
  <tr>
  <td><?PHP echo $row['idRDV']; ?></td>
  <td><?PHP echo $row['specialite']; ?></td>
  <td><?PHP echo $row['datee']; ?></td>
  <td><?PHP echo $row['heure']; ?></td>
  <td><?PHP echo $row['informations']; ?></td>
    <td><?PHP echo $row['disponibilite']; ?></td>
    

  
    </tr>
  <?PHP
}}
     ?>    
      </tbody>
                        </table>

    </body>

</html>
