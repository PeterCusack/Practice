 <!-- This page is displayed after all of the of the games are successfully completed-->

<!-- Calls header -->
<?php include('include/header.php');  ?>



 <?php
/* isn't used right now but might be in the future for making a comment box on this page

 if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$gameReview = trim($_POST["message"]);

	if ($gameReview == "") {
		echo "Uh Oh looks like you tried to send a blank message, try telling us what you thought of the site then hitting send";
		exit;
	}
	header("Location: Games1Completionthanks.php");



}

foreach ($_POST as $value) {
	if( stripos($value, 'Content-Type:') !== FALSE){
		echo "there was a problem with the information you entered.";
		exit;
	}
}*/
?>

		<!-- Page contents -->
		<div id="wrapper">
		<section class="completionPage">
			<pre>

				 <h2> <img src="images-index/CongratsConfettie.png" alt="Congradulations picture"> Congratulations <img src="images-index/CongratsConfettie.png" alt="Congradulations picture" class="flippedPicture" > </h2>
				<h4>You completed all of the games for This play, Nice job!</h4>

			</pre>


<!-- this sis for git -->

<?php include("include/footer.php"); ?>
 <!--Calls the footer into the filre into the file -->
