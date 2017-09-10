<?php
	$this->load->view('includes/main-header-files');
?>
</head>
<body>

<?php $this->load->view('includes/navigation'); ?>
<?php $this->load->view('includes/main-header'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>

<?php $this->load->view('pages/'.$page); ?>

</body>
</html>