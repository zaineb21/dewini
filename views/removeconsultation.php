<?php include "../core/consultationC.php";
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
            <h4 class="page-title">supprimer une consultaion</h4>
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
														<th>nomDoc</th>
														<th>dateCon</th>
														<th>numOrd</th>
														<th>maladie</th>
														<th>url</th>

													</tr>
		<?PHP											foreach($liste as $row){
	?>
	<tr>
	<td><?PHP echo $row['nomDoc']; ?></td>
	<td><?PHP echo $row['dateCon']; ?></td>
	<td><?PHP echo $row['numOrd']; ?></td>
	<td><?PHP echo $row['maladie']; ?></td>
	<td><?PHP echo $row['url']; ?></td>

    <td><form class="card-body" action="removeconsultation.php" method="GET">
	  <input type="submit" value="remove" class="btn btn-sm btn-danger m-b-5 m-t-5">
	  <input type="hidden" value="<?PHP echo $row['numOrd']; ?>" name="numOrd">
        </form></td>
    </tr>
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

$consultationC=new consultationC();
if (isset($_GET['numOrd'])){
	$consultationC->Supprimerconsultation($_GET['numOrd']);

}

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
