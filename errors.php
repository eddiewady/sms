
<?php if(count($errors) > 0) : ?>
	<div>
		<?php foreach ($errors as $error) : ?> 
			<p style="color: red; font-weight: bold;"><?php echo $error ?></p>
		<?php endforeach ?>
	
	</div>
	<?php endif ?>