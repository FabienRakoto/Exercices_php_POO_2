<?php

use \Tutoriel\HTML\Bootstrap_form;
use \Tutoriel\Autoloader;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content"">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet">
	<title></title>
</head>
<body>



<?php

require 'class/autoloader.php' ;

Autoloader::register();

$form = new Bootstrap_form($_POST);

?>

<form action="#" method="post">
	
	<?php

	echo $form->input('username') ;

	echo $form->input('password') ;

	echo $form->submit();

	echo $form->date();

	?>

</form>

</body>
</html>