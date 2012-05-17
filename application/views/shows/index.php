<p>Shows</p>
<?php foreach ($shows as $show): ?>
  <h3><?php echo $show['date']?></h3>
  <p><?php echo $show['location']?></p>
<?php endforeach ?>