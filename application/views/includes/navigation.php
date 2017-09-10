  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/img/logo.svg'); ?>" alt="Blocket" class="img-fluid"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">All Adds <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('jobs'); ?>">Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Residence</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('vehicles'); ?>">Vehicle</a>
      </li>
    </ul>
    <div class=" my-2 my-lg-0">
    	<ul class="navbar-nav mr-auto">
	      <li class="nav-item">
	        <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Messaging</a>
	      </li>
	      <li class="nav-item">
          <?php if(!empty($this->session->userdata('userData')) || !empty($this->session->userdata('username'))): ?>
	        <a class="nav-link" href="<?php echo base_url('/user_authentication/logout'); ?>"><i class="fa fa-user"></i> Sign Out</a>
          <?php else: ?>
          <a class="nav-link" href="<?php echo base_url('/user_authentication'); ?>"><i class="fa fa-user"></i> Sign in</a>
          <?php endif; ?>
	      </li>
	    </ul>
    </div>
  </div>
  </div>
</nav>