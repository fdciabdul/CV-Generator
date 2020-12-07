<html>
<head>
	<title><?php echo $title ?> </title>
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery-2.1.3.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/jquery-ui-1.12.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/main.js"></script>
	<style type="text/css">

		.typewritter h2 {
		  color: black;
		  font-family: Montserrat;
		  overflow: hidden; /* Ensures the content is not revealed until the animation */
		  border-right: .10em solid orange; /* The typwriter cursor */
		  white-space: nowrap; /* Keeps the content on a single line */
		  margin: 0 auto; /* Gives that scrolling effect as the typing happens */
		  letter-spacing: .10em; /* Adjust as needed */
		  animation: 
		    typing 3.5s steps(30, end),
		    blink-caret .5s step-end infinite;
		}

		/* The typing effect */
		@keyframes typing {
		  from { width: 0 }
		  to { width: 100% }
		}

		/* The typewriter cursor effect */
		@keyframes blink-caret {
		  from, to { border-color: transparent }
		  50% { border-color: transparent }
		}
	</style>
</head>
</head>
<body>