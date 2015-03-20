
<div class="row">

<!-- 	<div id="dashboard-side" class="col-md-2"> -->

	</div>

    <div id="dashboard-main" class="col-md-12">
    <ul class="list-group">
        <li class="list-group-item"><?php echo "User: ", $user_data['login'], " | Email: ", $user_data['email'], " | Phone: ", $user_data['phone'], " | Age: ", $user_data['age']; ?></li>
    </ul>
		
    		<div id="update_form_error" class="alert alert_error"></div>

	<form id="update_form" class="form-horizontal" method="post" action="<?=site_url('user/update_user')."/".$user_data['user_id']?>">

  <div class="form-group">
    <label class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="login" placeholder="Login" value="<?php echo htmlspecialchars($user_data['login'])?>"/>
    </div>
  </div>
  
  <div class="form-group">
    <label class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo htmlspecialchars($user_data['email'])?>"/>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Phone no.</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="phone" placeholder="001-000-000-0000" value="<?php echo htmlspecialchars($user_data['phone'])?>"/>
    </div>
  </div>

  <div class="form-group">
    <label class="col-sm-2 control-label">Age</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="age" placeholder="Age" value="<?php echo htmlspecialchars($user_data['age'])?>"/>
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
      <a class="btn btn-default" href="<?=site_url('dashboard')?>">Back</a>
    </div>
  </div>

</form>

	</div>

</div>

<script type="text/javascript">
	$(function()
	{
		$("#update_form_error").hide();

		$("#update_form").submit(function(evt)
		{
			evt.preventDefault(); //prevents the form from submitting
			var url = $(this).attr('action');
			var postData = $(this).serialize();

			$.post(url, postData, function(o)
			{
				if (o.result == 1) 
				{
					window.location.href = '<?=site_url('dashboard')?>';
				} else 
				{
					$("#update_form_error").show();
					var output = '<ul>';
					for (var key in o.error)
					{
						var value = o.error[key];
						output += '<li>' + key + ': ' + value +'</li>';
					}
					output += '</ul>';
					$("#update_form_error").html(output);
				}
			}, 'json');
		});
	});
</script>

