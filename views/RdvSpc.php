<!DOCTYPE html>
<html>
    <head>
    	<meta charset='utf-8'>
    	<title> Plateforme de Gestion de Rendez-vous</title>
    	<script type="text/javascript" src="./contents/jquery/jquery-3.4.1.min.js"></script>
    	<script src="./contents/bootstrap/js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="./contents/bootstrap//css/bootstrap.min.css" />
         <link rel="stylesheet" type="text/css" href="../a/style.css">
        <style>
            body {
            background-image: url("../a/healthcare.jpg");
            background-size: cover;
            background-color: #cccccc;
            }

        </style>
    </head>
    <body>
      <div>
     <h1> <center>     Liste des rendez-vous  </center></h1>
    <br>
    <br>
       <div class="container" id="rdvList1"> </div>
      <table class="table table-striped" id="tablerdv1" border="1">
    <tr>
      <th scope="col">Id du patient</th>
      <th scope="col">Date</th>
      <th scope="col">Heure</th>
      <th scope="col">Informations</th>
    </tr>
</table>
</div>
       <script src="./RdvSpec.js"> </script>

    </body>

</html>