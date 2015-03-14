
<div class="row">

	<div id="dashboard-side" class="col-md-2">

	</div>

	<div id="dashboard-main" class="col-md-10">
		<ul class="list-group">
			<?php foreach ($users as $user) { ?>
				<li class="list-group-item"><?php echo $user['login']; ?> <a href="../user/delete_user/<?php echo $user['user_id']?>">Delete</a></li>
			<?php } ?>
		</ul>

	</div>

</div>


Dashboard Admin