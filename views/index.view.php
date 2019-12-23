<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Document</title>

</head>
<body>


	<?php require('partial/nav.php'); ?>

	<h1>My Tasks</h1>

	<ul>
		<?php foreach ($tasks as $task) : ?>

			<li>
				<?php if ($task->completed) : ?> 

					<strike><?= $task->description; ?></strike>

				<?php else: ?>

					<?= $task->description; ?>

				<?php endif; ?>

			</li>

		<?php endforeach; ?>


	</ul>

</body>
</html>