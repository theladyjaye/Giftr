<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Giftr!</title>
	<script type="text/javascript" src="/resources/js/jquery.js"></script>
	<script type="text/javascript" src="/resources/js/giftr-application.js"></script>
	<script type="text/javascript" src="/resources/js/giftr-default.js"></script>
</head>
<body>
	<script type="text/javascript">
		var giftr = giftr || { }
		giftr.page.messages = <?php echo $model->messages;?>;
	</script>
	<div>
		<form method="post">
			<div>
				<label for="username">Username</label>
				<input type="text" id="username" name="username"/>
			</div>
			<div>
				<label for="email">Email</label>
				<input type="text" id="email" name="email"/>
			</div>
			<div>
				<label for="password">Password</label>
				<input type="text" id="password" name="password"/>
			</div>
			<div>
				<label for="password-verify">Password</label>
				<input type="text" id="password_verify" name="password-verify"/>
			</div>
			<input type="submit" name="submit" value="Submit" />
		</form>
	</div>
</body>
</html>