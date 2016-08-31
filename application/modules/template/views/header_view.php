<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- Bootstrap tags that must come first before any other tag -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- about this site -->
<meta name="description" content="">
<meta name="keywords" content="HTML, CSS, XML, XHTML, JavaScript">
<meta name="author" content="ADT Team">
<meta name="Resource-type" content="Document">
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url() .'assets/icons/state_kenya.png'?>"/>
<!-- dynamic files includes all the .js .css plugins-->
 	<?php      	
		$this->load->view('utils/dynamic_files');//..............this is to autoload the dynamic css and js files
	?>

<!-- Here is the title of Each page Module -->
<title>Migration Tool | <?php echo $title; ?></title>

</head>

<body>
