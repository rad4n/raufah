<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="<?=$this->e($page_desc);?>" />
    <meta name="keywords" content="<?=$this->e($page_key);?>" />
    <meta http-equiv="Copyright" content="popojicms" />
    <meta name="author" content="PopojiCMS" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="language" content="Indonesia" />
    <meta name="revisit-after" content="7" />
    <meta name="webcrawlers" content="all" />
    <meta name="rating" content="general" />
    <meta name="spiders" content="all" />

	<!-- Social Media Meta -->
	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>	

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />

	<!-- Javascript -->
	<script src="https://www.google.com/recaptcha/api.js"></script>
	<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="<?=$this->asset('/css/bootstrap.css')?>" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="<?=$this->asset('/css/style.css')?>" rel='stylesheet' type='text/css' />  
    <script src="<?=$this->asset('/js/jquery-1.11.1.min.js')?>"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900' rel='stylesheet' type='text/css'>
       <!--//webfonts-->
    <link rel="stylesheet" href="<?=$this->asset('/css/flexslider.css')?>" type="text/css" media="screen" />
    <script type="text/javascript" src="<?=$this->asset('/js/bootstrap.js')?>"></script>
    <script type="text/javascript" src="<?=$this->asset('/js/move-top.js')?>"></script>
           <script type="text/javascript" src="<?=$this->asset('/js/easing.js')?>"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
                    });
                });
            </script>
            <script type="text/javascript">
            $(document).ready(function() {
                    /*
                    var defaults = {
                    containerID: 'toTop', // fading element id
                    containerHoverID: 'toTopHover', // fading element hover id
                    scrollSpeed: 1200,
                    easingType: 'linear' 
                    };
                    */
            $().UItoTop({ easingType: 'easeOutQuart' });
    });
    </script>
    <!--light-box-files -->
    <script src="<?=$this->asset('/js/modernizr.custom.97074.js')?>"></script>
    <script src="<?=$this->asset('/js/jquery.chocolat.js')?>"></script>
    <link rel="stylesheet" href="<?=$this->asset('/css/chocolat.css')?>" type="text/css" media="screen" charset="utf-8">
            
            <script type="text/javascript" charset="utf-8">
            $(function() {
                $('.g-left a').Chocolat();
            });
    </script>
    <!--light-box-files -->
</head>
<body>
	<!-- Insert Header -->
    <?=$this->insert('header');?>

    <!-- Insert Content -->
    <?=$this->section('content');?>

    <!-- Insert Footer -->
    <?=$this->insert('footer');?>


	<!-- Javascript -->
	
</body>
</html>