<div class="row">
	<div id="home-side" class="col-md-10">

		<?php echo form_open_multipart('home/doupload');?>
		<input name="userfile" id="userfile" type="file" multiple="" />
		<input type="submit" value="Upload" />
		<?php echo form_close() ?>
	</div>
</div>