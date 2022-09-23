<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="styles.css" />

		<title>S.T.I</title>
	</head>
	<body>
	<script>alert("Merci pour votre message !");</script>



	<!-- It is the cake image on the left of site -->
    <img class='cake' src="Assets/images/cake.jpg">

    <section class="right d-flex justify-content-center align-items-center pt-5">
	<div class="container my-5 py-5">
		<div id="result" class="row md-12">
		
			<div class="texte">

			<!-- We recover the information sent with the form -->
                <h4 class="mail"><?= $_POST['email'] ?></h4>
				<h4 class="Bonjour"><strong>Bonjour </strong><?= $_POST['nom'] ?></h4>

				<p class="merci">Nous vous remercions pour votre message.</p>

                <textarea class="form-control" id="message" rows="3" placeholder="Message" disabled ><?= $_POST['message'] ?></textarea>                       
             </div>

		</div>

		</div>

		</div>
</section>
	



		
		

		<script src="assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>


