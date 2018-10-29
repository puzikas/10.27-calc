<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<head>
	<title>Skaiciuotuvas</title>
</head>
<body>

	<?php

	if (isset($_POST['cp']) && isset($_POST['margin'])) {
		if ($_POST['cp'] < 40) {
			$shipping = 10;
		} else  {
			$shipping = 0;
		}
		$cp = $_POST['cp'];
		$margin = $_POST['margin'];
		$vat = ($cp + $shipping + $margin / 100 * ($cp + $shipping)) * 0.21;
		$retail = $cp + $shipping + $margin + $vat;
	}
	?>


	<div class="container">
		<h1>Profit Calculator</h1>
		<br>
		<form action="index.php" method="post">
			<div class="row">
				<div class="col">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Cost Price</span>
						</div>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="cp">
						<div class="input-group-append">
							<span class="input-group-text">Eur</span>
						</div>
					</div>
				</div>
				<br>
				<div class="col">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Margin</span>
						</div>
						<input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="margin">
						<div class="input-group-append">
							<span class="input-group-text">%</span>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<button type="submit" class="btn btn-success form-control">Calculate</button>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<ul class="list-group">
						<li class="list-group-item">Cost price: <?= $cp ?> eur.</li>
						<li class="list-group-item">Shipping: <?= $shipping ?> eur.</li>
						<li class="list-group-item">Margin: <?= $margin / 100 * ($cp + $shipping) ?> eur.</li>
						<li class="list-group-item">VAT (21%): <?= $vat ?> eur.</li>
						<li class="list-group-item">Retail price: <?= $retail ?> eur.</li>
					</ul>
				</div>
			</div>

		</form>


	</div>
</body>
</html>