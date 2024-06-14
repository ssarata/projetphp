<?php
	//phpinfo();
	echo('<h1>sarata sankara</h1> ');
	$nombre="51";
	$nombre=(int) $nombre;
	echo $nombre;
	$admin=true;
?>
<?php if($admin==true):?>
	<button>edite</button>
	<button>delete</button>
<?php endif;?>
