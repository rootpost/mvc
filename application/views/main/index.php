<h2>СТРАНИЦА СОДЕРЖАНИЯ</h2>
<?php foreach($news as $val): ?>
	<h3><?php echo $val['title']; ?></h3>
	<p><?php echo $val['ndate']; ?></p>
	<p><?php echo $val['description']; ?></p><hr>
<?php endforeach; ?>