<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
    <link rel="stylesheet"  type="text/css" href="<?= APP_W.'pub/css/m.css'; ?>">
</head>
<body>
	<header>
		<h1> View -<?= $title; ?></h1>

		<div id="form">
			<form action="home/login" method="post">
				Username <input type="text" name="us" />
				Password <input type="text" name="password" />
				<input type="submit" value="Login" />
			</form>
		</div>
	</header>
	
