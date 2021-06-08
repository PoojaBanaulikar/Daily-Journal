<?php  if (count($error1) > 0) : ?>
  <div class="error1">
  	<?php foreach ($error1 as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
