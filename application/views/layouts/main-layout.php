<?php
	$this->load->view('includes/main-header-files');
?>
</head>
<body>
<?php $this->load->view('includes/main-header'); ?>

	<?php $this->load->view('pages/'.$page); ?>

<?php $this->load->view('includes/main-footer'); ?>
</body>
</html>