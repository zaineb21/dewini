<?php include "../core/rdvC.php";
 $rdv1C=new rdvC();
 $liste =$rdv1C->afficherrdv();
?>
<!DOCTYPE html>
<html>
    <head>

    	<meta charset='utf-8'>
    	<title> Afficher </title>
    	<script type="text/javascript" src="./contents/jquery/jquery-3.4.1.min.js"></script>
    	<script src="./contents/bootstrap/js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="./contents/bootstrap//css/bootstrap.min.css" />
         <link rel="stylesheet" href="../a/style.css" />
        <style>
        </style>
    </head>
    <body>
<script>
$(document).ready(function(){
  $("#Search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
  
   $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
<script>
function sortnumber(n) {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      vone from current row and one from the next:*/
    var x=0;
    var y=0;
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      //check if the two rows should switch place:
      if (x.innerHTML > y.innerHTML ){
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}
</script>
</form>
            
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
}
     ?>    
      </tbody>
                        </table>
<div class="login-box-delete">
<img src="../a/schedule.png" class="avatar">

<form>

<script src="../a/showRdvSpec.js"></script>

    </body>


</html>