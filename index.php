<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="styles.css">
<head>
	<title>Skaiciuotuvas</title>
</head>
<body>

	<div class="container">
	<form action="index.php" method="post">
		<div class="col-5">
			<label><h5>Cost Price</h5></label>
			<input type="text" name="cp" class="form-control">
		</div>
		<br>
		<div class="col-5">
			<label><h5>Margin</h5></label>
			<input type="text" name="margin" class="form-control">
			<br>
		</div>
		<div class="col-5">
			<button class="btn btn-success form-control">Calculate</button>
		</div>
		</form>
		<br>
		<table class="table table-bordered table-dark">
			<thead>
				<tr>
					<th scope="col">Cost Price</th>
					<th scope="col">Shipping</th>
					<th scope="col">Margin</th>
					<th scope="col">VAT</th>
					<th scope="col">Retail</th>
					<th scope="col">Coef</th>
				</tr>
			</thead>
			<tbody>
				
				<?php

					if (isset($_POST['cp']) && isset($_POST['margin'])) {
						if ($_POST['cp'] < 40) {
							$shipping = 10;
						} else  {
							$shipping = 0;
						}
						$cp = $_POST['cp'];
						$margin = $_POST['margin'];
						$vat = $cp + $shipping + $margin;
						$retail = $cp + $shipping + $margin + $vat;
					}



				?>

			</tbody>
		</table>

</div>
</body>
</html>