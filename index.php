<!DOCTYPE html>
<html>
	<head>
		<title>Projet Ambiance</title>
		<link rel="stylesheet" type="text/css" href="css/base.css">
		<link rel="icon" href="https://cdn0.iconfinder.com/data/icons/people-24/64/PeopleIcons-02-512.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="author" content="Le DI de l'ambiance">
		<meta charset="utf-8">
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<div id=nav class="col-md-12">
					<ul>
						<li><a href="#">LIEN</a></li>
						<li><a href="#">LIEN</a></li>
						<li><a href="#">LIEN</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 title">
					<h1>Panneau de contrôle</h1>
				</div>
			</div>
			<div class="row row1">
				<div class="col-md-5 col-md-offset-1 vent">
					<img src="img/vent.png">
					<h2>Vent : OUI</h2>
				</div>
				<div class="col-md-5 tempSoleil">
					<div>
						<p>Température :</p>
						<div class="indicateur indicateur1"></div>
					</div>
					<div>
						<p>Ensoleillement :</p>
						<div class="indicateur indicateur2"></div>
					</div>
				</div>
			</div>
			<div class="row row2">
				<div class="col-md-4 col-md-offset-1 energie">
					<div class="jauge"><div></div></div>
					<h2>Energie</h2>
				</div>
				<div class="col-md-6 toggle">
					<div>
						<label class="switch">
						  <input type="checkbox" checked="checked">
						  <span class="slider round"></span>
						</label>
						<p>Récup. Energie Eolienne</p>
					</div>
					<div>
						<label class="switch">
						  <input type="checkbox">
						  <span class="slider round"></span>
						</label>
						<p>Récup. Energie Solaire</p>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="js/jquery-3.3.1.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript" src="js/index.js"></script>
	</body>
</html> 