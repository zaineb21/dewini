<!DOCTYPE html>
<html>
    <head>
    	<meta charset='utf-8'>
    	<title> Ajouter un rendez-vous </title>
    	<script type="text/javascript" src="./contents/jquery/jquery-3.4.1.min.js"></script>
    	<script src="./contents/bootstrap/js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
         <link rel="stylesheet" href="./contents/bootstrap//css/bootstrap.min.css" />
         <link rel="stylesheet" href="../a/style.css" />
        <style>
        </style>
    </head>

    <body>
<div class="login-box">
      <img src="../a/dewini.png" class="avatar">
      <h1>     Prendre un rendez-vous   </h1>
      

 <form class="form-horizontal" method="POST"  action="ajoutrdv.php"> 
  <div class="container">
                           
                             
                           
                           
                            <label>date</label>
                                <div class="col-md-9">
                                    <input  type="date" name="date"id="date"  min="2021-01-01" max="2021-12-31">
                                </div>
                            <label>heure</label>
                                <div class="col-md-9">
                                    <input  type="number" name="heure"id="heure">
                                </div>
                            <label>information importante</label>
                                <div class="col-md-9">
                                    <input  type="text" name="info"id="info">
                                </div>
                           
                            
                              <label>  <i>  specialité</i></label>
                            </br>
                                <div class="col-md-9">
                                    <select class="form-control"  name="specialité" type="text" id="secteur" valeur="specialité"   >
                                        <option></option>
                                        <option>generaliste</option>
                                        <option>psy</option>
                                        <option>pédiatre</option>
                                      
                                    
                                    </select>
                                </div>
                                <br>
                            </div>
                            <input type="submit"  name="submit" value="submit"></td>
                        </form>
                        

     
     
      <script src="./addRdvRenderer.js">
            
      </script>

    </body>


</html>