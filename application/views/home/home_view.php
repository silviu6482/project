<div class="row">
<div id="home-side" class="col-md-6">
	<form id="login_form" class="form-horizontal" method="post" action="<?=site_url('user/login')?>">

		<div class="form-group">
		<label class="col-sm-4 control-label">Login</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" name="login" placeholder="Login" />
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-4 control-label">Password</label>
			<div class="col-sm-8">
				<input type="password" class="form-control" name="password" placeholder="Password" />
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<input type="submit" value="Login" class="btn btn-primary" />
				<a class="btn btn-default" href="<?=site_url('home/register')?>">Register</a>
				<a class="btn btn-default" href="<?=site_url('home/reset_pass')?>">Reset pass</a>
			</div>
		</div>

	</form>

</div>

<div id="home-main" class="col-md-6">
</div>
</div>
	

<script type="text/javascript">
	$(function()
	{
		$("#login_form").submit(function(evt)
		{
			evt.preventDefault(); //prevents the form from submitting
			var url = $(this).attr('action');
			var postData = $(this).serialize();

			$.post(url, postData, function(o)
			{
				if (o.result == 1) 
				{
					window.location.href = '<?=site_url('dashboard')?>';
					//alert('Login success');
				} else 
				{
					alert('Login failed');
				}
			}, 'json');
		})
	})
</script>
