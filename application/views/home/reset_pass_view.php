<div class="row">
	<div id="home-side" class="col-md-6">
		<form id="reset_pass" class="form-horizontal" method="post" action="<?=site_url('user/reset_pass')?>">
			<div class="form-group">
				<label class="col-sm-4 control-label">Email</label>
				<div class="col-sm-8">
			  		<input type="text" class="form-control" name="email" placeholder="Email" />
				</div>
			</div>

			<div class="form-group">
			    <div class="col-sm-offset-4 col-sm-8">
			      <input type="submit" value="Recover" class="btn btn-primary" />
			      <a class="btn btn-default" href="<?=site_url('/')?>">Back</a>
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
		$("#reset_pass").submit(function(evt)
		{
			evt.preventDefault(); //prevents the form from submitting
			var url = $(this).attr('action');
			var postData = $(this).serialize();

			$.post(url, postData, function(o)
			{
				if (o.result == 1) 
				{
					//window.location.href = '<?=site_url('dashboard')?>';
					//alert('Please check your email');
				} else 	
				{
					var error = [];
					for (var key in o.error){
						error.push(o.error[key]);
					}
					alert(error.join('\n'));
				}
			}, 'json');
		})
	})
</script>

