<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Welcome to Evercue</title>
	<script type="text/javascript" src="/resources/js/jquery.js"></script>
	<script type="text/javascript" src="/resources/js/giftr-application.js"></script>
	<script type="text/javascript" src="/resources/js/giftr-default.js"></script>
	<link href="/resources/css/master.css" media="screen" rel="stylesheet" type="text/css"/>
</head>
<body>
	<script type="text/javascript">
		var giftr = giftr || { }
		giftr.page.messages = <?php echo $model->messages?>;
	</script>

	<div id="container">
		<div id="header_container">
			<div id="hc_logo">
				<img src="/resources/images/logo.png">
			</div>
			<div id="hc_nav">
				<ul class="nav">
					<li><a href="/register">REGISTER</a></li>
					<li><a href="/login">LOGIN</a></li>
				</ul>
			</div>
		</div>
		<div id="feature_container">
			
		</div>	
	</div>
</body>
</html>