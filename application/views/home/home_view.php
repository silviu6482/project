<div class="main_title">
		<h1>My test project</h1>
		<p>Please take a look and tell me what you think about it as this is to become my main focus.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
		 dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
		  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
		   eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
		    deserunt mollit anim id est laborum.</p>
	</div>

<div class="img_home">
<img src="<?=site_url('../public/img/red.jpg')?>">
</div>

<!-- <div class="row">
<div id="home-side" class="col-md-12">
	<form id="login_form" class="form-horizontal" method="post" action="<?=site_url('user/login')?>">

		<div class="form-group">
		<label class="col-sm-2 control-label">Login</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="login" placeholder="Login" />
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" name="password" placeholder="Password" />
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" value="Login" class="btn btn-primary" />
				<a class="btn btn-default" href="<?=site_url('home/register')?>">Register</a>
				<a class="btn btn-default" href="<?=site_url('home/reset_pass')?>">Reset pass</a>
			</div>
		</div>

	</form>

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
 -->