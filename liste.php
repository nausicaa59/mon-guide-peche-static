<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link href="assets/css/style.css" rel="stylesheet" />
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
	</head>
	<body>
		<?php include("header.php"); ?>
		<!-- fiche -->
		<!-- head fiche -->
		<div class="layout">
			<div class="bloc_recherche">
				<!--<img src="http://catamaran-picardie.com/wp-content/uploads/2018/03/peche-en-mer-grande-motte.jpg" width="100%">-->
			</div>
			<div class="pageListe">
				<div class="container">
					<div class="row">
						<h1>Résultats de votre recherche : "Haut-De-France"</h1>
					</div>
					<div class="row">
						<?php for($i=0; $i < 11; $i++) : ?>
							<div class="col-md-4 col-12 liste-item ">
								<div class="item boxShadow">
									<div class="guide mer">
										Guide mer
									</div>						
									<div class="avatar">
										<a href="/index.php">
											<img src="https://www.nomadepeche.fr/wp-content/uploads/sites/42/2016/05/guide-de-peche-lac-de-montbel-ariege.jpg">
										</a>
									</div>
									<div class="infos">
										<div class="wordkey">
											Traîne - leurres - Surfcasting - Bar - Lieu - Dorade
										</div>
										<div class="name">Georges Blanpain</div>
										<div class="subtitle">59200, Tourcoing</div>
									</div>
									<div class="callToAction">
										<a href="/" class="btn btn-info">En savoir +</a>
									</div>
								</div>						
							</div>
						<?php endfor; ?>
					</div>					
				</div>
			</div>
		</div>
		<?php include("footer.php"); ?>
		<script src="https://cdn.jsdelivr.net/npm/vue@2.5.13/dist/vue.js"></script>
		<script src="assets/js/app.js"></script>
	</body>
</html>