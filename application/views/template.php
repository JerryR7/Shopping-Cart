<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="MediaCenter, Template, eCommerce">
        <meta name="robots" content="all">

        <title>MediaCenter - Responsive eCommerce Template</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
        
        <!-- Customizable CSS -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/green.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.transitions.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="assets/css/config.css">

        <link href="<?php echo base_url();?>assets/css/green.css" rel="alternate stylesheet" title="Green color">
        <link href="<?php echo base_url();?>assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
        <link href="<?php echo base_url();?>assets/css/red.css" rel="alternate stylesheet" title="Red color">
        <link href="<?php echo base_url();?>assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
        <link href="<?php echo base_url();?>assets/css/navy.css" rel="alternate stylesheet" title="Navy color">
        <link href="<?php echo base_url();?>assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
        
        <!-- Icons/Glyphs -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
        
        <!-- Favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico">

        <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <!-- GoTop -->
        <style type="text/css">
        #gotop {
            display: none;
            position: fixed;
            right: 20px;
            bottom: 20px;
            padding: 10px 15px;
            font-size: 20px;
            background: #777;
            color: white;
            cursor: pointer;
        }
        </style>
    </head>
<body>
    
    <div class="wrapper">
<!-- ========================================= TOP NAVIGATION ========================================= -->
<!-- ========================================= TOP NAVIGATION : END ========================================= -->

<!-- ========================================= HEADER ========================================= -->
<!-- ========================================= HEADER : END ========================================= -->       

<!-- ========================================= /.homepage2 ========================================= -->

<!-- ========================================= HOME BANNERS ========================================= -->
<!-- ========================================= HOME BANNERS : END ========================================= -->

<!-- ========================================= PRODUCTS TAB ========================================= -->

<!-- ========================================= BEST SELLERS ========================================= -->
<!-- ========================================= BEST SELLERS : END ========================================= -->

<!-- ========================================= RECENTLY VIEWED ========================================= -->
<!-- ========================================= RECENTLY VIEWED : END ========================================= -->

<!-- ========================================= TOP BRANDS ========================================= -->
<!-- ========================================= TOP BRANDS : END ========================================= -->

<!-- ========================================= FOOTER ========================================= -->
<!-- ========================================= FOOTER : END ========================================= -->

        <a href="javascript:undefined" id="gotop" title="回頁首">˄</a>

        <?php
          foreach($view as $view):
            $this->load->view($view);
          endforeach;
        ?>

        <?php
          foreach($contain_view as $contain):
            $this->load->view($contain);
          endforeach;
        ?>

   </div><!-- /.wrapper -->

    <!-- For demo purposes – can be removed on production -->
    
<!--     <div class="config open">
        <div class="config-options">
            <h4>Pages</h4>
            <ul class="list-unstyled animate-dropdown">
                <li class="dropdown">
                    <button class="dropdown-toggle btn le-button btn-block" data-toggle="dropdown">View Pages</button>
                    <ul class="dropdown-menu">
                                                <li><a href="index.html">Home</a></li>
                                                <li><a href="index-2.html">Home Alt</a></li>
                                                <li><a href="category-grid.html">Category - Grid/List</a></li>
                                                <li><a href="category-grid-2.html">Category 2 - Grid/List</a></li>
                                                <li><a href="single-product.html">Single Product</a></li>
                                                <li><a href="single-product-sidebar.html">Single Product with Sidebar</a></li>
                                                <li><a href="cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="about.html">About Us</a></li>
                                                <li><a href="contact.html">Contact Us</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-fullwidth.html">Blog Full Width</a></li>
                                                <li><a href="blog-post.html">Blog Post</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="terms.html">Terms & Conditions</a></li>
                                                <li><a href="authentication.html">Login/Register</a></li><li><a href="http://www.weidea.net">More</a></li>
                                            </ul>   
                </li>
            </ul>
            <h4>Header Styles</h4>
            <ul class="list-unstyled">
                <li><a href="index.html">Header 1</a></li>
                <li><a href="index-2.html">Header 2</a></li>
            </ul>
            <h4>Colors</h4>
            <ul class="list-unstyled">
                <li><a class="changecolor green-text" href="#" title="Green color">Green</a></li>
                <li><a class="changecolor blue-text" href="#" title="Blue color">Blue</a></li>
                <li><a class="changecolor red-text" href="#" title="Red color">Red</a></li>
                <li><a class="changecolor orange-text" href="#" title="Orange color">Orange</a></li>
                <li><a class="changecolor navy-text" href="#" title="Navy color">Navy</a></li>
                <li><a class="changecolor dark-green-text" href="#" title="Darkgreen color">Dark Green</a></li>
            </ul>
        </div>
        <a class="show-theme-options" href="#"><i class="fa fa-wrench"></i></a>
    </div> -->
    <!-- For demo purposes – can be removed on production : End -->

    <!-- JavaScripts placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
    <script src="<?php echo base_url();?>assets/js/gmap3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/css_browser_selector.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/echo.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap-slider.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.raty.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.customSelect.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/scripts.js"></script>

    <!-- For demo purposes – can be removed on production -->
    
    <script src="<?php echo base_url();?>switchstylesheet/switchstylesheet.js"></script>
    
    <script>
        $(document).ready(function(){ 
            $(".changecolor").switchstylesheet( { seperator:"color"} );
            $('.show-theme-options').click(function(){
                $(this).parent().toggleClass('open');
                return false;
            });
        });

        $(window).bind("load", function() {
           $('.show-theme-options').delay(2000).trigger('click');
        });
    </script>
    <!-- For demo purposes – can be removed on production : End -->

    <script src="http://w.sharethis.com/button/buttons.js"></script>

</body>
</html>