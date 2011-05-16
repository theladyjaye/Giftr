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
		giftr.page.messages = <?php echo $model->messages?>;
	</script>
	<div>
		This is the landing page.
	</div>
</body>
</html>