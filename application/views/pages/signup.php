<div class="col-lg-12">
	<div class="col-lg-6 login-form text-center">
	<?php if(empty($success)): ?>
	<?php if(!empty($error)): ?>
	<h3 class="bg-danger fail"><?php echo $error ?></h3><?php endif; ?>
	<form method="post" action="<?php echo base_url('user_authentication/signup'); ?>">
		<h1>Give us some info about you</h1><hr>
		<div class="form-group">
			<form method="post" action="user_authentication/signup">
			<input type="text" name="fname" placeholder="Enter First name" class="form-control" required /> <br />
			<input type="text" name="lname" placeholder="Enter Last name" class="form-control" required /> <br />
			<input type="text" name="username" placeholder="Enter username" class="form-control" required /> <br />
			<input type="email" name="email" placeholder="Enter Email" class="form-control" required /> <br />
			<input type="password" name="password" placeholder="Enter Password" class="form-control" required /> <br />
			<input type="text" name="role" placeholder="Your Role" class="form-control" required /> <br />
			<input type="text" name="subrole" placeholder="Sub role" class="form-control" required /> <br />
			<input type="number" name="phone" placeholder="Contact no" class="form-control" required /> <br />
			<input name="submit" type="submit" class="btn btn-primary btn-lg" value="Register Now">
			</form>
	</form>
	</div>
</div>
<div class="col-lg-6 login-form text-center">
	<?php else: ?>
	<h3 class="bg-success success"><?php echo $success ?></h3><?php endif; ?>
</div>
</div>