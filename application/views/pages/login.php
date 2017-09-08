<?php if(!empty($authUrl)) { ?>
<div class="col-lg-12">
<div class="col-md-6 text-center login-form">
	<?php if(!empty($error)): ?>
	<h3 class="bg-danger fail"><?php echo $error ?></h3><?php endif; ?>
	<form method="post" action="<?php echo base_url('user_authentication/login') ?>">
	<h1>Enter Your Login Details</h1><hr>
	<div class="form-group">
		<input type="text" name="username" placeholder="Enter Username" class="form-control" required /> <br />
		<input type="password" name="password" placeholder="Enter Password" class="form-control" required /> <br />
		<input name="submit" type="submit" class="btn btn-primary btn-lg" value="Login" style="width: 120px">
		</form>
		<h5>Not have an account ?</h5>
		<a href="user_authentication/signup"><button type="button" class="btn btn-info">Register now</button></a> Or 
		<?php echo '<a href="'.$authUrl.'"><button class="btn btn-info" type="button">Login with Facebook</button></a>'; ?>
	</div>
</div>
</div>

<?php }else if(!empty($userData)){
?>
<div class="fb-wrapper">
    <h1>Facebook Profile Details </h1>
    <div class="welcome_txt">Welcome <b><?php echo $userData['first_name']; ?></b></div>
    <div class="fb_box">
		<p class="image"><img src="<?php echo $userData['picture_url']; ?>" alt="" width="300" height="220"/></p>
		<p><b>Facebook ID : </b><?php echo $userData['oauth_uid']; ?></p>
		<p><b>Name : </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
		<p><b>Email : </b><?php echo $userData['email']; ?></p>
		<p><b>Gender : </b><?php echo $userData['gender']; ?></p>
		<p><b>Locale : </b><?php echo $userData['locale']; ?></p>
		<p><b>You are login with : </b>Facebook</p>
		<p><a href="<?php echo $userData['profile_url']; ?>" target="_blank">Click to Visit Facebook Page</a></p>
		<p><b>Logout from <a href="<?php echo $logoutUrl; ?>">Facebook</a></b></p>
    </div>
</div>
<?php }else{ ?>
<?php if(!empty($success)): ?>
<div class="col-md-6 text-center login-form">
<h3 class="bg-success success"><?php echo $success ?></h3><?php endif; ?>
</div>

<?php } ?>