
<div class="row">

	<div id="dashboard-side" class="col-md-2">

	</div>

	<div id="dashboard-main" class="col-md-10">
		<ul class="list-group">
			<?php foreach ($users as $user) { ?>
				<li class="list-group-item"><?php echo $user['login'], " ", $user['email']; ?>
			<?php } ?></li>
		</ul>

		<div id="update_form_error" class="alert alert_error"></div>

	<form id="update_form" class="form-horizontal" method="post" action="<?=site_url('user/register')?>">

	  <div class="form-group">
	    <label class="col-sm-2 control-label">Login</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="login" placeholder="Login" />
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	      <input type="text" class="form-control" name="email" placeholder="Email" />
	    </div>
	  </div>

	  <div class="form-group">
	    <label class="col-sm-2 control-label">Password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="password" placeholder="Password" />
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Confirm password</label>
	    <div class="col-sm-10">
	      <input type="password" class="form-control" name="confirm_password" placeholder="Re-enter password" />
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <input type="submit" value="Update" class="btn btn-primary" />
	      <a class="btn btn-default" href="<?=site_url('dashboard/users')?>">Back</a>
	    </div>
	  </div>

	</form>

	</div>

</div>

Dashboard Admin

