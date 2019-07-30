<title><?php echo SITE_NAME; if ($this->uri->segment(2) != null) { echo " - ". ucfirst($this->uri->segment(1));} if ($this->uri->segment(2) != null) { echo " - ". ucfirst($this->uri->segment(2));} ?></title>
<!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 10]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- Meta -->
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="description" content="#"/>
<meta name="keywords" content=""/>
<meta name="author" content="#"/>
<!-- Favicon icon -->
<link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.ico') ?>" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url('assets/img/apple-touch-icon.png') ?>" type="image/x-icon" >
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/bootstrap/css/bootstrap.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/bootstrap-select/css/bootstrap-select.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/libs/jquery-ui/css/jquery-ui.min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')."?v=".version ?>">
