<?php 
require 'application/system/GFTREnvironment.php';
Giftr\System\Page::Controller('DefaultController.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo $model->title?></title>
</head>
<body>
	<?php echo $model->message?>
</body>
</html>