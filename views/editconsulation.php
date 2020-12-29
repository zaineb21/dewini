<?php include "../../core/consultationC.php";
include ("../../entites/consultation.php");
 $consultation1C=new consultationC();
 $liste =$consultation1C->afficherconsultation();

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.spruko.com/demo/splite/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>test </title>
        <script>
        function verif() {

		if (document.getElementById("mail").value=="") {
			alert("Tapez un email valable pour avoir une réponse.");
			document.getElementById("mail").focus();
			return false;
		}
		if (document.getElementById("numOrd").value=="") {
			alert("Pensez à taper un numOrd !");
			document.getElementById("numOrd").focus();
			return false;

		}
        if (document.getElementById("date").value=="") {
			alert("Pensez à taper un date !");
			document.getElementById("date").focus();
			return false;

		}
        if (document.getElementById("nomDoc").value=="") {
			alert("Pensez à taper un nomDoc !");
			document.getElementById("nomDoc").focus();
			return false;

		}
        if (document.getElementById("date").value=="") {
			alert("Pensez à taper un date !");
			document.getElementById("date").focus();
			return false;

		}
        if (document.getElementById("num").value==0) {
			alert("Pensez à taper un num de permis !");
			document.getElementById("num").focus();
			return false;

		}
        if (document.getElementById("url").value=="") {
			alert("Pensez à taper un url !");
			document.getElementById("url").focus();
			return false;

		}
        if (document.getElementById("tel").value==0) {
			alert("Pensez à taper un tel !");
			document.getElementById("tel").focus();
			return false;

		}
    }
    </script>
		<!--favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

    </head>
    <body>



   <div class="app-content">
    <section class="section">

        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">add deleveryman</h4>
            <ol class="breadcrumb">

            </ol>
        </div>
 <!--row open-->
 <div class="row">

    <div class="col-lg-12">
									<div class="card">
										<div class="card-header">

										</div>
										<div  class="card-body">
											<div id="table" class="table-responsive table-editable" >
												<table  class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap" >
													<tr class="bg-primary">
                                                    <th></th>
														<th>nomDoc</th>
														<th>first name</th>
														<th>last name</th>
														<th>brithday</th>
														<th>phone number</th>

													</tr>

                                                    <?PHP



?>
    <?PHP
    if (isset($_POST['cin_ini']))
    {
      $nomDoc=$_POST['nomDoc'];
      $numOrd=$_POST['numOrd'];
      $date=$_POST['date'];
      $maladie=$_POST['maladie'];
      $url=$_POST['url'];

      $consultation=new consultation($numOrd,$date,$nomDoc,$tel,$url,$date_naiss,$mail,$num_permis,$maladie);
      $consultationC=new consultationC();

      $consultationC->modifierconsultation($consultation,$_POST['nomDoc']);


    }

    		foreach($liste as $row){




    ?>
    <form class="card-body" action="editdelevryman.php"  method="POST" >
	<tr>
    <td>
	  <input type="submit" value="edit" class="btn btn-sm btn-danger m-b-5 m-t-5" name="edit" >
      <input type="hidden" value="<?PHP echo $row['nomDoc']; ?>" name="cin_ini" >
      </td>

    <td><input type="number" value="<?PHP echo $row['nomDoc']; ?>" name="nomDoc" id="nomDoc">; </td>
    <td><input type="text" value="<?PHP echo $row['date']; ?>"id="date"name="date">; </td>
    <td><input type="nutextmber" value="<?PHP echo $row['numOrd'] ;?>"id="numOrd"name="numOrd">; </td>
    <td><input type="date" value="<?PHP echo $row['date_naissance']; ?>"id="date" name="date">; </td>
    <td><input type="tel" value="<?PHP echo $row['tel']; ?>"id="tel" name="tel">; </td>




    </tr>
    </form>
    <?php
}
         ?>
												</table>
											</div>
										</div>
									</div>
								</div>
                            </div>

                            <?PHP


?>
                                                <?PHP



?>

		<script src="assets/js/jquery.min.js"></script>

<!--popper js-->
<script src="assets/js/popper.js"></script>

<!--Tooltip js-->
<script src="assets/js/tooltip.js"></script>

<!--Bootstrap.min js-->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Jquery star rating-->
<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

<!--Jquery.nicescroll.min js-->
<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

<!--Scroll-up-bar.min js-->
<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

<!--mCustomScrollbar js-->
<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

<!--Sidemenu js-->
<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

<!--Scripts js-->
<script src="assets/js/scripts.js"></script>
<script src="assets/js/accordiation.js"></script>
<script src="assets/js/jquery.showmore.js"></script>

</body>

<!-- Mirrored from www.spruko.com/demo/splite/faq.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:35:02 GMT -->
</html>
