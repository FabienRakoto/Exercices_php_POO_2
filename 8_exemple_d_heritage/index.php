<?php

require 'form.php';
require 'text.php';

$form = new Form($_POST);

var_dump (Text::withZero(4));
var_dump (Text::withZero(10));

?>

<form action="#" method="post">
	
	<?php

	echo $form->input('username') ;

	echo $form->input('password') ;

	echo $form->submit();

	?>

</form>