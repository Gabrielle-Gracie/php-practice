<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<style>
		header{
			background: grey;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>
<body>


	<!-- <h1>
		<?= "Hello, ". htmlspecialchars($_GET['']); ?>
	</h1> -->
    
    <ul>


    <!-- 	<?php foreach ($animals as $name) : ?>
    	<li><?= $name; ?></li>
    	<?php endforeach; ?>

 -->

    	<!-- <?php

    	    foreach ($names as $name){
    	    echo "<li>$name</li>";
    	}

    	?> -->

    	<!-- <?php foreach ($myself as $xteristics => $val): ?>
    	<li><strong><?= $xteristics . ':' ; ?></strong> <?= $val; ?></li>
    	<?php endforeach; ?> -->

    	<?php foreach ($task as $toDo => $value): ?>
    	<li><strong><?= ucwords($toDo); ?>:</strong> <?= $value; ?></li>
    	<?php endforeach; ?>


    </ul>

</body>
</html> 