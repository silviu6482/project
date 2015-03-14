
<div class="row">

	<div id="dashboard-side" class="col-md-2">

	</div>

	<div id="dashboard-main" class="col-md-10">
		<ul>
			<?php foreach ($users as $user) { ?>
				<li><?php echo $user['login']; ?> <a href="../user/delete_user/<?php echo $user['user_id']?>">Delete</a></li>
			<?php } ?>
		</ul>
	</div>

</div>


Dashboard Admin